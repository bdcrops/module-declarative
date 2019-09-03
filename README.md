## BDC_Declarative Schema Module Declarative Schema Tutorial

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

1.6- Magento 2 Certified Associate Developer Exam

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


## 1. How to Create a table?

The below example creates the declarative_table table with four columns. The id_column column is the primary key.
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
+    <table name="declarative_table">
+        <column xsi:type="int" name="id_column" padding="10" unsigned="true" nullable="false" comment="Entity Id"/>
+        <column xsi:type="int" name="severity" padding="10" unsigned="true" nullable="false" comment="Severity code"/>
+        <column xsi:type="varchar" name="title" nullable="false" length="255" comment="Title"/>
+        <column xsi:type="timestamp" name="time_occurred" padding="10" comment="Time of event"/>
+        <constraint xsi:type="primary" referenceId="PRIMARY">
+            <column name="id_column"/>
+        </constraint>
+    </table>
</schema>
```
When creating a new table, remember to generate the db_schema_whitelist.json file.

## 2. How to Drop a table?

To drop declarative_table table was completely removed from the db-schema.xml file.
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
        //Remove All Content, Table will be Drop after whitelist & Upgrade run
</schema>
```

## 3. How to Rename a table?

  ```
  <table name="declarative_table">
   Changed as below
<table name="new_declarative_table" onCreate="migrateDataFromAnotherTable(declarative_table)">
```

## 4. How to Add a column to table?


The following example adds the date_closed column.
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column .../> ...

+       <column xsi:type="timestamp" name="date_closed" padding="10" comment="Time of event"/>

        <constraint ..>...</constraint>
    </table>
</schema>
```
When adding a new column into table, remember to generate the db_schema_whitelist.json file.

## 5. How to Drop a column from a table?

The following example removes the date_closed column by deleting its column node. To drop a column declared in another module, redeclare it with the disabled attribute set to true.
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column xsi:type="int" name="id_column" padding="10" unsigned="true" nullable="false" comment="Entity Id"/>
        <column xsi:type="int" name="severity" padding="10" unsigned="true" nullable="false" comment="Severity code"/>
        <column xsi:type="varchar" name="title" nullable="false" length="255" comment="Title"/>
        <column xsi:type="timestamp" name="time_occurred" padding="10" comment="Time of event"/>
-       <column xsi:type="timestamp" name="date_closed" padding="10" comment="Time of event"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="id_column"/>
        </constraint>
    </table>
</schema>
```
It is possible to drop a column only if it exists in the db_schema_whitelist.json file.

## 6. How to Change the column type?

The following example changes the type of the title column from varchar to tinytext.

```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column .../>
        <column .../>
-       <column xsi:type="varchar" name="title" nullable="false" length="255" comment="Title"/>
+       <column xsi:type="tinytext" name="title" nullable="false" length="255" comment="Title"/>
        <column xsi:type="timestamp" name="time_occurred" padding="10" comment="Time of event"/>
        <constraint ...>....</constraint>
    </table>
</schema>
```

## 7. How to Rename a column?

To rename a column, delete the original column declaration and create a new one. In the new column declaration, use the onCreate attribute to specify which column to migrate data from. Use the following construction to migrate data from the same table.
```
onCreate="migrateDataFrom(entity_id)"
```
When renaming a column, remember to regenerate the db_schema_whitelist.json file so it contains the new name in addition to the old one.

## 8. How to Add an index?

The following example adds the INDEX_SEVERITY index to the declarative_table table.

```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column .... />
        <constraint ...> <column name="id_column"/> </constraint>

+       <index referenceId="INDEX_SEVERITY" indexType="btree">
+           <column name="severity"/>
+       </index>
    </table>
</schema>
```

## 9. How to Create a foreign key?

In the following example, the selected constraint node defines the characteristics of the FL_ALLOWED_SEVERITIES foreign key.

```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column ../> ...
        <constraint...> ...    </constraint>

+     <constraint xsi:type="foreign" referenceId="FL_ALLOWED_SEVERITIES" table="declarative_table"
+       column="severity" referenceTable="severities" referenceColumn="severity_identifier"
+       onDelete="CASCADE"/>

    </table>
</schema>
```

## 10. How to Drop a foreign key?

The following example removes the FL_ALLOWED_SEVERITIES foreign key by deleting its constraint node. To drop a constraint declared in another module, redeclare it with the disabled attribute set to true.

```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
      ......
-  <constraint xsi:type="foreign" referenceId="FL_ALLOWED_SEVERITIES" table="declarative_table"
-  column="severity" referenceTable="severities" referenceColumn="severity_identifier"
-   onDelete="CASCADE"/>

    </table>
</schema>
```

## 11. How to Recreate a foreign key?

In this example, Module A defines a new table with primary key id_column. Module B declares its own schema, in which it creates a new column (new_id_column) and changes the primary index to this column. Module B disables the original primary key and sets a new primary key with a referenceId value that is different from PRIMARY. Although this value is different, the real name of the primary key in the database remains PRIMARY.

Module A declaration
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column xsi:type="int" name="id_column" padding="10" unsigned="true" nullable="false" comment="Entity Id"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="id_column"/>
        </constraint>
    </table>
</schema>
```
Module B declaration

```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column xsi:type="int" name="new_id_column" padding="10" unsigned="true" nullable="false"
                comment="New Entity Id"/>
        <constraint xsi:type="primary" referenceId="PRIMARY" disabled="true"/>
        <constraint xsi:type="primary" referenceId="NEW_PRIMARY">
            <column name="new_id_column"/>
        </constraint>
    </table>
</schema>
```

## 12.What is Data patch?

 - A class that contains data modification instructions. It can have dependencies on other data or schema patches.

## 13. What is Revertable data patch?

- A patch that can be reverted as a module or path is uninstalled or deleted. Revertable operations are Data Query Language (DQL) and Data Manipulation Language (DML) operations: INSERT, UPDATE.

## 14. What is Migration?

- A type of non-revertable data patch that can be applied, but not reverted. Any complex operation, such as one that contains an application layer (for example, Collections or Serializers) is non-revertable. SQL delete operations are non-revertable because they can cause triggering.

## 15. What is Schema patch &  allow  operations?

 A class that contains custom schema modification instructions. Schema patches are used along with declarative schema, but these patches allow complex operations such as:

-Adding triggers, stored procedures, functions

-Performing data migration with inside DDL operations

-Renaming tables, columns, and other entities

-Adding partitions and options to a table


### 1.6- Magento 2 Certified Associate Developer Exam
(4.4 Demonstrate an ability to use declarative schema)

## How do you add a column using declarative schema?

The following example adds the date_closed column.
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column .../> ...

+       <column xsi:type="timestamp" name="date_closed" padding="10" comment="Time of event"/>

        <constraint ..>...</constraint>
    </table>
</schema>
```
When adding a new column into table, remember to generate the db_schema_whitelist.json file.

##How do you modify a table added by another module?

See Above FAQ

##How do you delete a column?

The following example removes the date_closed column by deleting its column node. To drop a column declared in another module, redeclare it with the disabled attribute set to true.
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column xsi:type="int" name="id_column" padding="10" unsigned="true" nullable="false" comment="Entity Id"/>
        <column xsi:type="int" name="severity" padding="10" unsigned="true" nullable="false" comment="Severity code"/>
        <column xsi:type="varchar" name="title" nullable="false" length="255" comment="Title"/>
        <column xsi:type="timestamp" name="time_occurred" padding="10" comment="Time of event"/>
-       <column xsi:type="timestamp" name="date_closed" padding="10" comment="Time of event"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="id_column"/>
        </constraint>
    </table>
</schema>
```
It is possible to drop a column only if it exists in the db_schema_whitelist.json file.

## How do you add an index or foreign key using declarative schema?

See Above FAQ

## How do you manipulate data using data patches?

See Above FAQ

## What is the purpose of schema patches?

 See Above FAQ


## Ref

https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/

https://onilab.com/blog/declarative-schema-magento-2-3-and-higher/
