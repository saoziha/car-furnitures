<div>
    <h1> Hello, world! - Bootstrap embedded </h1>
</div>
<div>
    <img id="testhinh" src="public/hinh.jpg" />
</div>
<div>
    <div class="col-md-12">
        <div class="clearfix visible-sm"></div>
    </div>
    <a href="webservice/phonebook/contacts/listAll" target="_blank">Webservice 1</a>
    <a href="webservice/phonebook/whatever_object/listAll" target="_blank">Webservice 2</a>
    <a href="webservice/testpkg/test2/listAll" target="_blank">Webservice 3</a>
    <a href="test" target="_blank"> Test(appname)/test </a>
</div>

<star name="content2"></star>
<div id="test">
    <?php
    #Mirana load package(s)
    $r =  Mirana_Package::autoload(); echo $r;
    $r =  Mirana_Package::manualLoad([
        "contacts/manual",
        "testpkg"       //this won't load again
    ]); echo $r;


    $r = Mirana_Protocol::wsCall("phonebook/contacts/load", ["id"=>2]);
    var_dump($r);
    echo "<br><br>";
    // $r = $t->save(Mirana_Security::randString(8), "test", Mirana_Security::randString(11));
    // var_dump($r);
    var_dump(Mirana_Protocol::wsCall("phonebook/contacts/listAll"));
    echo "<br><br>";

    $t = Mirana_Datasource::newTableInstance("testdb","contacts");
    $t->setPk("id");
    $t->id = 2;
    $t->phone = "0937919606";
    #var_dump($t->update());
    $t2 = $t->update(NULL, ["id"=>2]);
    var_dump($t2);
    echo "<br><br>";

    var_dump(Mirana_Routing::getMiranaQueryString());
    echo "<br><br>";
    ?>
</div>
