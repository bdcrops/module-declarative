## BDC_Declarative Schema Module

Declarative Schema: Magento 2.3x introduced a new declarative schema feature which aims at eliminating the excessive work and speeding up the installation and upgrade processes.

Most module developers will be familiar with creating php scripts for creating, updating and manipulating custom tables for their modules. These files would live in the module directory here;

/app/code/NameSpace/ModuleName/Setup/InstallSchema.php
/app/code/NameSpace/ModuleName/Setup/UpgradeSchema.php

Since Magento 2.3.0, you can now use the declarative DB schema XML to create and update your DB tables in a single XML file. This file is placed in your module here;

/app/code/NameSpace/ModuleName/etc/db_schema.xml

This change is incredibly useful once you start playing with it. The php schema scripts can be long winded and difficult to read. The XML is short and neat, making it a relative dream to work with.

#### Goal:

1.1- create table (etc/db_schema.xml)

1.2- schema whitelist (etc/db_schema_whitelist.json)

1.3- Insert data (Installing and upgrading data)

1.4 - How to install & upgrade BDC_Declarative

1.5- FAQ of Declarative Schema


## 1.1 create table

Firstly create a magento 2 basic module with file “db_schema.xml” inside folder “BDC/Declarative/etc” and write the following code

![db_schema](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/db_schema.png)



## 1.2 A schema whitelist

You will not be able to run a declarative mode without creating a schema whitelist.
Note: it is recommended to generate a new whitelist for every release for the double-check purposes.

Before running the upgrade command you need to add your schema to db_whitelist_schema.json file by running the following command.

For that, you need a //etc/db_schema_whitelist.json file that will store all the content added with declarative schema. To generate this file, run:


![db_schema](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/whitelist.png)


php bin/magento setup:db-declaration:generate-whitelist [options]
php bin/magento setup:db-declaration:generate-whitelist --module-name=vendor_module

php bin/magento setup:db-declaration:generate-whitelist --module-name=BDC_Declarative


Now, there are db_whitelist_schema.json file will be create in /vendor/module/etc folder.


## 1.3  Insert data

create app/code/BDC/Declarative/Setup/Patch/Data/NonRevertable.php & Revertable.php


![Insert data](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/data.png)

Run php bin/magento setup:upgrade then

![Insert data](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/db-table.png)


## 1.4 How to install & upgrade BDC_Declarative

### A. Copy and paste
If you don't want to install via composer, you can use this way.

- Download [the latest version here](https://github.com/bdcrops/module-declarative/archive/master.zip)
- Extract `master.zip` file to `app/code/BDC/Declarative` ; You should create a folder path `app/code/BDC/Declarative` if not exist.
- Go to Magento root folder and run upgrade command line to install `BDC_Declarative`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

[![Latest Stable Version](https://poser.pugx.org/bdcrops/module-declarative/v/stable)](https://packagist.org/packages/bdcrops/module-declarative)
[![Total Downloads](https://poser.pugx.org/bdcrops/module-declarative/downloads)](https://packagist.org/packages/bdcrops/module-declarative)



### B. Install via composer

We recommend you to install BDC_Declarative module via composer. It is easy to install, update and maintaince.Run the following command in Magento 2 root folder.

####  Install & Upgrade

Run
```
composer config repositories.module-declarative git
https://github.com/bdcrops/module-declarative.git

composer require bdcrops/module-declarative:~1.0.0
```
Upgrade    

```
composer update bdcrops/module-declarative

php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```
Run compile if your store in Product mode:
```
php bin/magento setup:di:compile

```

## 1.5  FAQ of Declarative Schema

#Drop a table

To drop declarative_table table was completely removed from the db-schema.xml file.
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
        //Remove All Content, Table will be Drop after whitelist & Upgrade run
</schema>

#Rename a table

  <table name="declarative_table">
   Changed as below
<table name="new_declarative_table" onCreate="migrateDataFromAnotherTable(declarative_table)">



## Ref

https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/

https://onilab.com/blog/declarative-schema-magento-2-3-and-higher/
