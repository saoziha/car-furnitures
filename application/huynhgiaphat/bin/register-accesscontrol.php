<?php
    /*-----
    COMPANY: the3ds team
    AUTHOR: Tom DINH
    PROJECT: core APP_Engine
    DESCRIPTION: --
    DATE: 22/May/2016
    -----*/
    ################################################################################
    //TODO: all role have to be in CAPITAL_LETTERS with no_space, no_number, otherwise system will not recognize
    ${APP_ACCESSCONTROL}[AC_ROLELIST] = array(
        "END_USER",
        "ADMIN",
        "SUPER_ADMIN"
    );
    //TODO: all items must be declared in $role_list, the structure is strictly required
    ${APP_ACCESSCONTROL}[AC_ROLECOVER] = array(
        "SUPER_ADMIN" => array("ADMIN", "END_USER"), //List all role that this role could cover, no nested here
        "ADMIN" => array("END_USER"),
        "END_USER" => NULL //or an Empty array
    );

    //TODO: put values in _KEY_VALUES, put use controller to load and control the variable's scope (inside controller only)
?>
