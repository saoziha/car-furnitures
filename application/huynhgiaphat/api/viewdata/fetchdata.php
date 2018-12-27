<?php
    namespace huynhgiaphat\viewdata;
    use Mirana_DbUltis, Mirana_Datasource, VirtualTable, ValueObject, QueryObject;

    class fetch {
        var $AUTHORIZATION = "SUPER_ADMIN"; //set role can access this class
        // var $AUTHORIZATION = "END_USER"; //set role can access this class
        ######################################################################
        private $db;

        public function __construct(){
            $this->dbname = "db_huynhgiaphat";
            $this->db = Mirana_Datasource::getDatabase($this->dbname);
        }
        ######################################################################

        //TODO:write functions here

        public function menu(){
            $tableName = "core_menu";
            $db = $this->db;

            if ($db !== NULL){
                $e = new QueryObject($db, $tableName);
                $retVal = $e->lookup(["orderBy"=>"sorted"])->export();
            } else {
                $retVal = NULL;
            }

            ## code for navigation
            return $retVal;
        }

        public function category(){
            $tableName = "comp_product_cat";
            $db = $this->db;

            if ($db !== NULL){
                $e = new QueryObject($db, $tableName);
                $retVal = $e->lookup()->export();
            } else {
                $retVal = NULL;
            }

            ## code for navigation
            return $retVal;
        }

        public function product(){
            $tableName = "comp_product";
            $db = $this->db;

            if ($db !== NULL){
                $e = new QueryObject($db, $tableName);
                $retVal = $e->lookup([
                    "orderBy"=>["cat_id", "update_timestamp"],
                    "itemPerPage" => 20,
				    "pageNum" => 0
                ])->export();
            } else {
                $retVal = NULL;
            }

            ## code for navigation
            return $retVal;
        }

        public function singleProduct($prodId){
            $dbname = $this->dbname;

            $e = Mirana_Datasource::newTableInstance($dbname, "comp_product");
            $retVal = $e->read(intval($prodId))->export();

            $e = Mirana_Datasource::newTableInstance($dbname, "comp_product_cat");
            $t = $e->read(intval($retVal['cat_id']))->export();
            if (isset($t['name'])) $retVal['cat_name'] = $t['name'];

            $e = Mirana_Datasource::newTableInstance($dbname, "comp_product_hit");
            $t = $e->read(["product_id"=>intval($retVal['id'])])->export();
            if (isset($t['hit'])) $retVal['hit'] = intval($t['hit']);

            return $retVal;
        }

        public function relatedProduct($prodId){
            $e = Mirana_Datasource::newTableInstance($this->dbname, "comp_product");
            $e->read(intval($prodId));

            $prodId = $e->id;
            $catId = $e->cat_id;

            $db = $this->db;
            if ($db !== NULL){
                $e = new QueryObject($db);
                $retVal = $e->executeSQL("
                    SELECT a.* FROM comp_product as a WHERE a.cat_id = :cat_id AND a.id != :prod_id
                ", [":cat_id"=>$catId, ":prod_id"=>$prodId])->export();
            } else {
                $retVal = NULL;
            }

            ## code for navigation
            return $retVal;
        }

        public function latestProduct(){
            $tableName = "comp_product";
            $db = $this->db;

            if ($db !== NULL){
                $e = new QueryObject($db, $tableName);
                $retVal = $e->lookup([
                    "orderBy"=>"update_timestamp",
                    "descOrder"=>true,
                    "itemPerPage" => 10,
				    "pageNum" => 0
                ])->export();
            } else {
                $retVal = NULL;
            }

            ## code for navigation
            return $retVal;
        }

        public function hotProduct(){
            $tableName = "comp_product";
            $db = $this->db;

            if ($db !== NULL){
                $e = new QueryObject($db, $tableName);
                $retVal = $e->lookup([
                    "props"=>["is_hot"=>1],
                    "itemPerPage" => 10,
				    "pageNum" => 0
                ])->export();
            } else {
                $retVal = NULL;
            }

            ## code for navigation
            return $retVal;
        }

        public function hit($prodId, $auth=""){ //TODO: write proper auth
            if ($auth === "authentication@noithathuynhgiaphat.com--BEIOPRWCGMFETUQWERTUJNF") {
                $dbname = $this->dbname;

                $e = Mirana_Datasource::newTableInstance($dbname, "comp_product_hit");
                $e->read(["product_id"=>intval($prodId)]);
                if (isset($e->hit)){
                    $e->hit++;
                    $e->update();
                } else {
                    $e->hit = 1;
                    $e->create();
                }
            } else {
                ;
            }
            return NULL;
        }

        public function mostHit(){
            $db = $this->db;
            if ($db !== NULL){
                $e = new QueryObject($db);
                $retVal = $e->executeSQL("
                    SELECT a.* FROM comp_product as a LEFT JOIN comp_product_hit as b ON a.id=b.product_id
                    ORDER BY b.hit DESC LIMIT 20
                ")->export();
            } else {
                $retVal = NULL;
            }

            ## code for navigation
            return $retVal;
        }
    }
 ?>
