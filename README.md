## BDC_Declarative Schema Module Declarative Schema Tutorial

Declarative Schema: Magento 2.3x introduced a new declarative schema feature which aims at eliminating the excessive work and speeding up the installation and upgrade processes.

Most module developers will be familiar with creating php scripts for creating, updating and manipulating custom tables for their modules. These files would live in the module directory here;

- /app/code/NameSpace/ModuleName/Setup/InstallSchema.php
- /app/code/NameSpace/ModuleName/Setup/UpgradeSchema.php

Since Magento 2.3.0, you can now use the declarative DB schema XML to create and update your DB tables in a single XML file. This file is placed in your module here;

/app/code/NameSpace/ModuleName/etc/db_schema.xml

This change is incredibly useful once you start playing with it. The php schema scripts can be long winded and difficult to read. The XML is short and neat, making it a relative dream to work with.


## Goal:

 - Create table (etc/db_schema.xml)

 - Schema whitelist (etc/db_schema_whitelist.json)

 - Insert data (Installing and upgrading data)

 - How to install & upgrade BDC_Declarative

 - FAQ of Declarative Schema

 - Certified Associate/Professional Developer Questions & Solution



## 1. How to install & upgrade  Declarative Schema Module

### 1.1. Copy and paste
If you don't want to install via composer, you can use this way.

- Download [the latest version here](https://github.com/bdcrops/module-declarative/archive/master.zip)
- Extract `master.zip` file to `app/code/BDC/Declarative` ; You should create a folder path `app/code/BDC/Declarative` if not exist.
- Go to Magento root folder and run upgrade command line to install `BDC_Declarative`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### 1.2. Install via composer

We recommend you to install BDC_Declarative module via composer. It is easy to install, update and maintaince.Run the following command in Magento 2 root folder.

https://packagist.org/packages/bdc/module-declarative

```
composer require bdc/module-declarative
```

### 1.3  Install & Upgrade
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
****

## 2. Declarative Schema Module Step By Step

 - Create app/code/BDC/Declarative/registration.php
 ```
 <?php
 \Magento\Framework\Component\ComponentRegistrar::register(
     \Magento\Framework\Component\ComponentRegistrar::MODULE,
     'BDC_Declarative',
     __DIR__
 );

 ```

 - Create app/code/BDC/Declarative/etc/module.xml
 ```
 <?xml version="1.0"?>
 <config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
     <module name="BDC_Declarative" setup_version="1.0.0"/>

 </config>

 ```
 - Create app/code/BDC/Declarative/etc/db_schema.xml
 ```
 <?xml version="1.0"?>
 <schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="bdc_declarative" resource="default" engine="innodb" comment="bdcrops declarative table">
         <column xsi:type="smallint" name="id" padding="6" unsigned="false" nullable="false" identity="true" comment="ID"/>
         <column xsi:type="varchar" name="name" nullable="false" length="25" comment="Name"/>
         <column xsi:type="varchar" name="email" nullable="false" length="25" comment="Email"/>
         <column xsi:type="varchar" name="note" nullable="false" length="255" comment="Descrition"/>
         <column xsi:type="timestamp" name="created"  comment="Time of event"/>
         <column xsi:type="timestamp" name="date_closed"  comment="Time of event"/>
         <constraint xsi:type="primary" referenceId="PRIMARY">   <column name="id"/> </constraint>
     </table>
 </schema>

 ```
  file “db_schema.xml” inside folder “BDC/Declarative/etc” and write the following code

 ![db_schema](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/db_schema.png)

 - Create app/code/BDC/Declarative/Setup/Schema/Sample.php
 ```
 <?php
 declare(strict_types=1);

 namespace BDC\Declarative\Setup\Patch\Schema;

 use Magento\Framework\Setup\Patch\SchemaPatchInterface;
 use Magento\Framework\Setup\ModuleDataSetupInterface;
 /**
 * Patch is mechanism, that allows to do atomic upgrade data changes
 */
 class Sample implements SchemaPatchInterface{
     /**
      * @var ModuleDataSetupInterface $moduleDataSetup
      */
     private $moduleDataSetup;
     /**
      * @param ModuleDataSetupInterface $moduleDataSetup
      */
     public function __construct(ModuleDataSetupInterface $moduleDataSetup) {
         $this->moduleDataSetup = $moduleDataSetup;
     }
     /**
      * Do Upgrade
      *
      * @return void
      */
     public function apply() { }
     /**
      * {@inheritdoc}
      */
     public function getAliases() { return []; }
     /**
      * {@inheritdoc}
      */
     public static function getDependencies() { return [ ]; }
 }

 ```

 - Create app/code/BDC/Declarative/Setup/Patch/Data/NonRevertable.php
 ```
 <?php
 declare(strict_types=1);
 namespace BDC\Declarative\Setup\Patch\Data;

 use Magento\Framework\Setup\Patch\DataPatchInterface;
 use Magento\Framework\Setup\ModuleDataSetupInterface;
 /**
  * Class NonRevertable
  * @package BDC\Declarative\Setup\Patch\Data
  */
 class NonRevertable implements DataPatchInterface{
     /**
      * @var ModuleDataSetupInterface $moduleDataSetup
      */
     private $moduleDataSetup;
     /**
      * @param ModuleDataSetupInterface $moduleDataSetup
      */
     public function __construct(ModuleDataSetupInterface $moduleDataSetup){
         $this->moduleDataSetup = $moduleDataSetup;
     }
     /**
      * Do Upgrade
      * @return void
      */
     public function apply(){
         $data = ['name' => 'Matin Rahman', 'email' => 'matinict@gmail.com','note' => 'Declarative insert'];
         $this->moduleDataSetup->getConnection()->insert('bdc_declarative', $data);
     }
     /**
      * {@inheritdoc}
      */
     public function getAliases(){ return []; }
     /**
      * {@inheritdoc}
      */
     public static function getDependencies(){ return []; }
 }

 ```
 - Create app/code/BDC/Declarative/Setup/Patch/Data/Revertable.php
 ```
 <?php
 declare(strict_types=1);

 namespace BDC\Declarative\Setup\Patch\Data;

 use Magento\Framework\Setup\Patch\DataPatchInterface;
 use Magento\Framework\Setup\ModuleDataSetupInterface;
 /**
  * Class Revertable
  * @package BDC\Declarative\Setup\Patch\Data
  */
 class Revertable implements DataPatchInterface {
     /**
      * @var ModuleDataSetupInterface $moduleDataSetup
      */
     private $moduleDataSetup;

     /**
      * @param ModuleDataSetupInterface $moduleDataSetup
      */
     public function __construct(ModuleDataSetupInterface $moduleDataSetup){
         $this->moduleDataSetup = $moduleDataSetup;
     }

     /**
      * Do Upgrade
      *
      * @return void
      */
     public function apply() { }

     /**
      * {@inheritdoc}
      */
     public function getAliases() { return []; }
     /**
      * {@inheritdoc}
      */
     public static function getDependencies() { return [ ]; }
 }

 ```
-  Run
 A schema whitelist:You will not be able to run a declarative mode without creating a schema whitelist.
Note: it is recommended to generate a new whitelist for every release for the double-check purposes. Before running the upgrade command you need to add your schema to db_whitelist_schema.json file by running the following command.
For that, you need a //etc/db_schema_whitelist.json file that will store all the content added with declarative schema. To generate this file, run:

![db_schema](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/whitelist.png)

```
php bin/magento setup:db-declaration:generate-whitelist [options]
php bin/magento setup:db-declaration:generate-whitelist --module-name=vendor_module
php bin/magento setup:db-declaration:generate-whitelist --module-name=BDC_Declarative
php bin/magento setup:upgrade --dry-run=1 --keep-generated
```

Now, there are db_whitelist_schema.json file will be create in /vendor/module/etc folder.
 Insert data NonRevertable.php & Revertable.php

![Insert data](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/data.png)
```
Run php bin/magento setup:upgrade
```
![Insert data](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/db-table.png)

***

## 3.  Declarative Schema FAQ

### What is Declarative Schema ?

![declarative-schema](docs/magento-2-declarative-schema-8-638.jpg)

### Why Declarative Schema ?

![Issues with Setup Scripts](docs/magento-2-declarative-schema-10-638.jpg)

### Will Declarative Schema help ?

 ![Declarative Schema Offers](docs/magento-2-declarative-schema-12-638.jpg)

### How Declaring/Create a table?
![Declaring a table](docs/magento-2-declarative-schema-18-638.jpg)
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

### What is <table/> Attributes ?
#### <table/> Attributes

![Attributes](docs/magento-2-declarative-schema-19-638.jpg)
#### <table/> Attributes (Contd)

![Attributes (Contd)](docs/magento-2-declarative-schema-20-638.jpg)

### What is  integer columns?

![](docs/magento-2-declarative-schema-23-638.jpg)
![](docs/magento-2-declarative-schema-24-638.jpg)

### How Declaring integer columns?

![](docs/magento-2-declarative-schema-22-638.jpg)


### How Declaring text columns?
![](magento-2-declarative-schema-26-638.jpg)

###  What is   <column/> Text Attributes ?

![](docs/magento-2-declarative-schema-27-638.jpg)
![](docs/magento-2-declarative-schema-28-638.jpg)

###  How Declaring binary columns?

![](docs/magento-2-declarative-schema-30-638.jpg)

### Whats is binary or <column/> Text Attributes ?

![](docs/magento-2-declarative-schema-31-638.jpg)
![](docs/magento-2-declarative-schema-32-638.jpg)


###   Declaring decimal columns?
![](docs/magento-2-declarative-schema-34-638.jpg)

###  decimal or <column/> Text Attributes ?

![](docs/magento-2-declarative-schema-35-638.jpg)
![](docs/magento-2-declarative-schema-36-638.jpg)

### Declaring a time column?

![](DOCS/magento-2-declarative-schema-38-638.jpg)

###  time or  <column/> Text Attributes ?

![](docs/magento-2-declarative-schema-39-638.jpg)
![](docs/magento-2-declarative-schema-40-638.jpg)

###  Declaring a primary key?
![](docs/magento-2-declarative-schema-42-638.jpg)

###  Declaring a foreign key?
![](docs/magento-2-declarative-schema-44-638.jpg)


###  Declaring a unique key?
![](docs/magento-2-declarative-schema-46-638.jpg)

###  Declaring an index?
![](docs/magento-2-declarative-schema-48-638.jpg)

###  <index/> Attributes?
![](docs/magento-2-declarative-schema-49-638.jpg)

###  How Generating db_schema_whitelist.json?
![](docs/magento-2-declarative-schema-51-638.jpg)

###  <module_root>/etc/db_schema_whitelist.json?
![](docs/magento-2-declarative-schema-52-638.jpg)
![](docs/magento-2-declarative-schema-54-638.jpg)


###  Testing with dry-run?
![](docs/magento-2-declarative-schema-56-638.jpg)
![](docs/magento-2-declarative-schema-57-638.jpg)

###  var/log/dry-run-installation.log?
![](docs/magento-2-declarative-schema-59-638.jpg)

###  Applying Database Schema?
![](docs/magento-2-declarative-schema-61-638.jpg)

### Modifying the table column?
![](docs/magento-2-declarative-schema-63-638.jpg)
![](docs/magento-2-declarative-schema-64-638.jpg)
![](docs/magento-2-declarative-schema-65-638.jpg)


###  Testing with safe-mode  Destructive Operations ?

![](docs/magento-2-declarative-schema-67-638.jpg)
![](docs/magento-2-declarative-schema-68-638.jpg)

###  var/declarative_dumps_csv/ {column_name_column_type_other_dimensions}.csv var/declarative_dumps_csv/{table_name}.csv?
![](docs/magento-2-declarative-schema-69-638.jpg)

###  Restoring Schema Data?
![](docs/magento-2-declarative-schema-71-638.jpg)

###  Uninstalling a Module?
![](docs/magento-2-declarative-schema-73-638.jpg)

###  Converting Setup Script to Declarative Schema?
![](docs/magento-2-declarative-schema-75-638.jpg)

###  Limitations of Declarative Schema?

![](docs/magento-2-declarative-schema-76-638.jpg)



### What is Schema Patch?

![](docs/magento-23-schema-and-data-patches-6-638.jpg)

### Where do we define Schema Patch?
![](docs/magento-23-schema-and-data-patches-8-638.jpg)
![](docs/magento-23-schema-and-data-patches-9-638.jpg)

###  Methods we will implement?
![](docs/magento-23-schema-and-data-patches-10-638.jpg)
![](docs/magento-23-schema-and-data-patches-11-638.jpg)
![](docs/magento-23-schema-and-data-patches-11-638.jpg)
![](docs/magento-23-schema-and-data-patches-12-638.jpg)
![](docs/magento-23-schema-and-data-patches-13-638.jpg)
![](docs/magento-23-schema-and-data-patches-14-638.jpg)
![](docs/magento-23-schema-and-data-patches-15-638.jpg)
![](docs/magento-23-schema-and-data-patches-16-638.jpg)

### How Applying the Schema Patch?   
![](docs/magento-23-schema-and-data-patches-18-638.jpg)


### What happened behind the scenes after Applying the Schema Patch?  
![](docs/magento-23-schema-and-data-patches-20-638.jpg)
![](docs/magento-23-schema-and-data-patches-21-638.jpg)

###   What is Data Patch?
![](docs/magento-23-schema-and-data-patches-23-638.jpg)

### Where do we define Data Patch file ?  
![](docs/magento-23-schema-and-data-patches-25-638.jpg)
![](docs/magento-23-schema-and-data-patches-26-638.jpg)
![](docs/magento-23-schema-and-data-patches-26-638.jpg)
![](docs/magento-23-schema-and-data-patches-27-638.jpg)
![](docs/magento-23-schema-and-data-patches-28-638.jpg)

### What is Version Patch?
Versions Patches
• It is used for backwards compatibility with older setup scripts
• A version number can be defined
• Magento checks if setup module version
• If the version of the module is higher than the version specified in your patch, then the patch is skipped
• If the version in the database is equal or lower, then the patch installs.
• It is marked as deprecated  
![](docs/magento-23-schema-and-data-patches-30-638.jpg)

### How to convert a schema/patch into a version patch ?

![](docs/magento-23-schema-and-data-patches-32-638.jpg)

###   What is Revertable Patch?
Revertable Patches
• Patches can be reverted at the time of removing the module
• Single patches cannot be reverted
• Module uninstall needed to be triggered
• This feature is still buggy and changes are happening

![](docs/magento-23-schema-and-data-patches-34-638.jpg)

### How to convert a schema/patch into a revertable patch ?   
![](docs/magento-23-schema-and-data-patches-36-638.jpg)

### How to uninstall a module ?
![](docs/magento-23-schema-and-data-patches-38-638.jpg)

### New CLI Command  Generating Patches?
![](docs/magento-23-schema-and-data-patches-40-638.jpg)
![](docs/magento-23-schema-and-data-patches-41-638.jpg)


### How to Drop a table?

To drop declarative_table table was completely removed from the db-schema.xml file.
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
        //Remove All Content, Table will be Drop after whitelist & Upgrade run
</schema>
```
### What is Top node?
The top node represents the schema node, which is located in the schema.xsd file.

<schema xmlns:xsi=”http://www.w3.org/2001/XMLSchema-instance”        xsi:noNamespaceSchemaLocation=”urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd”>

The location of the schema.xsd file is: <magento_root_directory>/vendor/magento/framework/Setup/Declaration/Schema/etc/schema.xsd

### What is  Table node?
We can create more than one table in the same db_schema.xml file, each table node creates a new table in the database. A table node can contain the following attributes:
- Name: The name of the table
- Engine: SQL engine, this value must be InnoDB or memory.
- Resource: The database shard on which to install the table. This value must be default, checkout, or sales.
- Comment: Table comment
The table node contains three different types of subnodes:
- Column
- Constraints
- Index

### What is Column node?
The column node defines inside the table node, each column node has its own declaration. A column node can contain the following attributes:
- Type: the column type should contain one of the blob (includes blob, mediumblob, longblob), boolean, date, datetime, int (includes smallint, bigint, tinyint), real (includes decimal, float, double, real), text (includes text, mediumtext, longtext), timestamp, varbinary, and varchar.
- Name: name of the column
- Padding: indicates the size of the integer column
- Unsigned: indicates if the column contains positive and negative values or only positive values
- Nullable: indicates if the column can be nullable
- Comment: indicates the comment of the column
- Length: indicates the length of a column

### How to Rename a table?

  ```
  <table name="declarative_table">
   Changed as below
<table name="new_declarative_table" onCreate="migrateDataFromAnotherTable(declarative_table)">
```
### How to Add a column to table?

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

### How to Drop a column from a table?

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

### How to Change the column type?

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

###  How to Rename a column?

To rename a column, delete the original column declaration and create a new one. In the new column declaration, use the onCreate attribute to specify which column to migrate data from. Use the following construction to migrate data from the same table.
```
onCreate="migrateDataFrom(entity_id)"
```
When renaming a column, remember to regenerate the db_schema_whitelist.json file so it contains the new name in addition to the old one.

###  How to Add an index?

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

### How to Create a foreign key?

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

### How to Drop a foreign key?

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

### How to Recreate a foreign key?

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
###  What is Data patch?

A class that contains data modification instructions. It can have dependencies on other data or schema patches.

### What is Revertable data patch?

 A patch that can be reverted as a module or path is uninstalled or deleted. Revertable operations are Data Query Language (DQL) and Data Manipulation Language (DML) operations: INSERT, UPDATE.

### What is Migration?

A type of non-revertable data patch that can be applied, but not reverted. Any complex operation, such as one that contains an application layer (for example, Collections or Serializers) is non-revertable. SQL delete operations are non-revertable because they can cause triggering.

### What is Schema patch &  allow  operations?

 A class that contains custom schema modification instructions. Schema patches are used along with declarative schema, but these patches allow complex operations such as:

- Adding triggers, stored procedures, functions

- Performing data migration with inside DDL operations

- Renaming tables, columns, and other entities

- Adding partitions and options to a table


# Magento 2 Certified Associate Developer Exam


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

### How do you modify a table added by another module?

Suppose we want add new column name="referred_by" on core table customer_entity
etc/db_schema.xml
```
--<?xml version="1.0"?>
--<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
--This below content oly if exist declaration
    <table name="customer_entity">
    <column xsi:type="int" name="referred_by" padding="10" unsigned="true" nullable="false"
    comment="Referred By"/>
     
    </table>

--</schema>
```
Then run following command to generate db_schema_whitelist.json

```
php bin/magento setup:db-declaration:generate-whitelist --module-name=BDC_Declarative
php bin/magento setup:upgrade --dry-run=1 --keep-generated
php bin/magento setup:upgrade
```
![](docs/b4addcolumn.png)
![](docs/dryRun.png)
![](docs/afterAddcolumn.png)

 You can modify code according to your requirement.

### How do you delete a column?

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


### "Declarative Schema" vs "Extension Attributes" ?

"Declarative Schema" is used when you need to create a NEW table inside Magento. With declarative schema you have the advantages of mutations.
"Extension Attributes" are used to add new fields inside an EXISTING table. In this way you don't extend the original model.So in the above example, the best approach is to use Extension Attributes. magento-2-what-are-extension-attributes


### How do you add an index ?

Add an index: The following example adds the INDEX_SEVERITY index to the declarative_table table.
```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column xsi:type="int" name="id_column" padding="10" unsigned="true" nullable="false" comment="Entity Id"/>
        <column xsi:type="int" name="severity" padding="10" unsigned="true" nullable="false" comment="Severity code"/>
        <column xsi:type="tinytext" name="title" nullable="false" length="255" comment="Title"/>
        <column xsi:type="timestamp" name="time_occurred" padding="10" comment="Time of event"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="id_column"/>
        </constraint>
+       <index referenceId="INDEX_SEVERITY" indexType="btree">
+           <column name="severity"/>
+       </index>
    </table>
</schema>
```


### How do You add  foreign key using declarative schema?

- Create a foreign key
In the following example, the selected constraint node defines the characteristics of the FL_ALLOWED_SEVERITIES foreign key.

```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column xsi:type="int" name="id_column" padding="10" unsigned="true" nullable="false" comment="Entity Id"/>
        <column xsi:type="int" name="severity" padding="10" unsigned="true" nullable="false" comment="Severity code"/>
        <column xsi:type="varchar" name="title" nullable="false" length="255" comment="Title"/>
        <column xsi:type="timestamp" name="time_occurred" padding="10" comment="Time of event"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="id_column"/>
        </constraint>
+       <constraint xsi:type="foreign" referenceId="FL_ALLOWED_SEVERITIES" table="declarative_table"
+               column="severity" referenceTable="severities" referenceColumn="severity_identifier"
+               onDelete="CASCADE"/>
    </table>
</schema>
```
- Drop a foreign key
The following example removes the FL_ALLOWED_SEVERITIES foreign key by deleting its constraint node. To drop a constraint declared in another module, redeclare it with the disabled attribute set to true.

```
<schema xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                 xsi:noNamespaceSchemaLocation="urn:magento:framework:Setup/Declaration/Schema/etc/schema.xsd">
    <table name="declarative_table">
        <column xsi:type="int" name="id_column" padding="10" unsigned="true" nullable="false" comment="Entity Id"/>
        <column xsi:type="int" name="severity" padding="10" unsigned="true" nullable="false" comment="Severity code"/>
        <column xsi:type="varchar" name="title" nullable="false" length="255" comment="Title"/>
        <column xsi:type="timestamp" name="time_occurred" padding="10" comment="Time of event"/>
        <constraint xsi:type="primary" referenceId="PRIMARY">
            <column name="id_column"/>
        </constraint>
-       <constraint xsi:type="foreign" referenceId="FL_ALLOWED_SEVERITIES" table="declarative_table"
-               column="severity" referenceTable="severities" referenceColumn="severity_identifier"
-               onDelete="CASCADE"/>
    </table>
</schema>
```
It is possible to drop a foreign key only if it exists in the db_schema_whitelist.json file.

- Recreate a foreign key
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

### How do you manipulate data using data patches?

A data patch is a class that contains data modification instructions. It is defined in a <Vendor>/<Module_Name>/Setup/Patch/Data/<Patch_Name>.php file and implements \Magento\Framework\Setup\Patch\DataPatchInterface.


### What is the purpose of schema patches?

A schema patch contains custom schema modification instructions. These modifications can be complex. It is defined in a <Vendor>/<Module_Name>/Setup/Patch/Schema/<Patch_Name>.php file and implements \Magento\Framework\Setup\Patch\SchemaPatchInterface.

Unlike the declarative schema approach, patches will only be applied once. A list of applied patches is stored in the patch_list database table. An unapplied patch will be applied when running the setup:upgrade from the Magento CLI.

## Magento 2 Certified Professional Developer exam

### 4.4 Demonstrate an ability to use declarative schema
- How do you add a column using declarative schema?
- How do you modify a table added by another module? ||
- How do you delete a column?  ||
- How do you add an index or foreign key using declarative schema? ||
- How do you manipulate data using data patches?  
- What is the purpose of schema patches?

### How to manipulate columns and keys using declarative schema?  

- Add a column to table
The following example adds the date_closed column.
![](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.3/extension-dev-guide/declarative-schema/images/add-column.png)

- Drop a column from a table
The following example removes the date_closed column by deleting its column node.
To drop a column declared in another module, redeclare it with the disabled attribute set to true.
![](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.3/extension-dev-guide/declarative-schema/images/remove-column.png)

- Change the column type
The following example changes the type of the title column from varchar to tinytext.
![](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.3/extension-dev-guide/declarative-schema/images/change-column-type.png)

- Rename a column
To rename a column, delete the original column declaration and create a new one.
In the new declaration, use the onCreate attribute to specify which column to migrate data from.
Use the following construction to migrate data from the same table.
onCreate="migrateDataFrom(entity_id)"

To migrate data from another table, specify a value similar to the following:
onCreate="migrateDataFromAnotherTable(catalog_category_entity,entity_id)"
 - Add an index
The following example adds the INDEX_SEVERITY index to the table_name table.

![](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.3/extension-dev-guide/declarative-schema/images/add-index.png)
- Create a foreign key
In the following example, the selected constraint node defines the characteristics of the FL_ALLOWED_SEVERITIES foreign key.

![](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.3/extension-dev-guide/declarative-schema/images/create-fk.png)

- Drop a foreign key
The following example removes the FL_ALLOWED_SEVERITIES foreign key by deleting its constraint node.
To drop a constraint declared in another module, redeclare it with the disabled attribute set to true.
![](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.3/extension-dev-guide/declarative-schema/images/drop-fk.png)

### What is the purpose of whitelisting?

Purpose of whitelisting:
You will not be able to run a declarative mode without creating a schema whitelist.
Since backward compatibility must be maintained, declarative schema doesn’t automatically delete database tables, columns or keys not defined in db_schema.xml.This is one of the reasons we have db_schema_whitelist.json. It shows a history of all tables, columns and keys added with declarative schema and it’s required for drop operations.  

Note: it is recommended to generate a new whitelist for every release for the double-check purposes. Before running the upgrade command you need to add your schema to db_whitelist_schema.json file by running the following command. For that, you need a //etc/db_schema_whitelist.json file that will store all the content added with declarative schema. To generate this file, run:

![db_schema](https://github.com/bdcrops/BDC_Declarative/blob/master/view/adminhtml/web/images/whitelist.png)

```
php bin/magento setup:db-declaration:generate-whitelist [options]
php bin/magento setup:db-declaration:generate-whitelist --module-name=vendor_module
php bin/magento setup:db-declaration:generate-whitelist --module-name=BDC_Declarative
php bin/magento setup:upgrade --dry-run=1 --keep-generated
```

Now, there are db_whitelist_schema.json file will be create in /vendor/module/etc folder.

There are options you can add at the end of that command. For instance,  you can use “–module-name=YourModule” to specify the module you want to generate a whitelist for. Similarly, you could also set “–module-name=all” although it will generate a whitelist for all modules by default.  


###  How to use Data and Schema patches?

- Data Patches:
![](https://github.com/bdcrops/module-declarative/raw/master/docs/magento-23-schema-and-data-patches-23-638.jpg)
![](https://github.com/bdcrops/module-declarative/raw/master/docs/magento-23-schema-and-data-patches-25-638.jpg)


- Schema Patches :
![](https://github.com/bdcrops/module-declarative/raw/master/docs/magento-23-schema-and-data-patches-6-638.jpg)


### How to manage dependencies between patch files?

schema patch contains custom schema modification instructions. These modifications can be complex. It is defined in a <Vendor>/<Module_Name>/Setup/Patch/Schema/<Patch_Name>.php file and implements \Magento\Framework\Setup\Patch\SchemaPatchInterface.

Unlike the declarative schema approach, patches will only be applied once. A list of applied patches is stored in the patch_list database table. An unapplied patch will be applied when running the setup:upgrade from the Magento CLI.

Optionally, if you plan to enable rollback for your patch during module uninstallation, then you must implement \Magento\Framework\Setup\Patch\PatchRevertableInterface.

Old scripts will work with new versions of Magento. However, if you want to convert your old scripts to the new format, implement \Magento\Framework\Setup\Patch\PatchVersionInterface. This interface allows you to specify the setup version of the module in your database. If the version of the module is higher than or equal to the version specified in your patch, then the patch is skipped. If the version in the database is lower, then the patch installs



## Ref

- [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/)

- [onilabblog](https://onilab.com/blog/declarative-schema-magento-2-3-and-higher/)
