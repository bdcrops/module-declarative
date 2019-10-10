# Magento 2 Exam Working with Databases

## Magento 2 Certified Associate Developer-18%

### 4.1 Describe the basic concepts of models, resource models, and collections
- What are the responsibilities of each of the ORM object types?
- How do they relate to one another?
### 4.2 Describe how entity load and save occurs
- How do you use the native Magento save/load process in the development process?
### 4.3 Describe how to filter, sort, and specify the selected values for collections and repositories
- How do you select a subset of records from the database?
### 4.4 Demonstrate an ability to use declarative schema
- How do you add a column using declarative schema?
- How do you modify a table added by another module?
- How do you delete a column?
- How do you add an index or foreign key using declarative schema?
- How do you manipulate data using data patches?
- What is the purpose of schema patches?

## Magento 2 Certified Professional Developer-7%

### 4.1 Demonstrate ability to use data-related classes
- Describe repositories and data API classes.
- How do you obtain an object or set of objects from the database using a repository?
- How do you configure and create a SearchCriteria instance using the builder?
- How do you use Data/Api classes?
- Describe how to create and register new entities?
- How do you add a new table to the database?
- Describe the entity load and save process?
- Describe how to extend existing entities.
- What mechanisms are available to extend existing classes, for example by
adding a new attribute, a new field in the database, or a new related entity?
- Describe how to filter, sort, and specify the selected values for collections & repositories?
- How do you select a subset of records from the database?
- Describe the database abstraction layer for Magento.
- What type of exceptions does the database layer throw?
- What additional functionality does Magento provide over Zend_Adapter?
### 4.2 Demonstrate an ability to use declarative schema
- Demonstrate use of schema.
- How to manipulate columns and keys using declarative schema?
- What is the purpose of whitelisting?
- How to use Data and Schema patches?
- How to manage dependencies between patch files?

## Magento 2 Certified Professional Developer Plus-14%

### 3.1 Demonstrate understanding of the architectural layers of the database access classes, including models, repositories, and data mappers
-  Models, resource models, and collections in Magento, their impact on performance?
- Repositories, SearchCriteria,
- WebAPI, WebAPI access, extension attributes
- How to create an entity that supports extension attributes
- How to implement SearchCriteria processing in the repository::getList method
- How to perform bulk save operations in Magento
- How to extend the Magento data object (Data API class) with an attribute that has values in a remote system
- How to extend exisitng WebAPI calls with a new parameter
- How to create a dynamic WebAPI ACL
- The difference between extension attributes and custom attributes
### 3.2 Demonstrate understanding of the staging workflow
- Staging modification to the Magento database operations (row_id, entity managers)
- How does data versioning work?
- Different possibilities of data versioning (row/table/database level) and how implemented?
- The role of the entity manager
- High level staging implementation overview
### 3.3 Demonstrate an ability to use different types of setup scripts in Magento
- Schema and data setup scripts, uninstall scripts, recurring scripts, uninstall schema vs. uninstall data
- What happens when an uninstall script is executed: data version change, deleted tables, etc.
- Recurring scripts and their order in the setup:upgrade process
- Accessing areas and system configuration values in setup scrip
