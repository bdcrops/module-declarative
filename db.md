# Magento 2 Exam Working with Databases

## Magento 2 Certified Associate Developer-18%

### 4.1 Describe models, resource models & collections

- Basic concepts of models, resource models & collections?
 [codilar](https://www.codilar.com/blog/magento-2-models-resource-models-and-collections/),
[belvg](https://belvg.com/blog/database-in-magento-2-models-resource-models-and-collections.html),
[codilar](https://www.codilar.com/blog/magento-2-models-resource-models-and-collections/),
[spiredigital](https://www.spiredigital.com/views/magento-2-create-model-using-joined-sql-query/),
[markshust](https://markshust.com/2019/01/22/magento-database-resource-model-not-persisting-on-save/),
[etatvasoft](https://www.etatvasoft.com/blog/how-to-develop-crud-module-in-magento-2/)

- What are the responsibilities of each of the ORM object types?
[mageplaza](https://www.mageplaza.com/magento-2-module-development/how-to-create-crud-model-magento-2.html),[alanstorm](https://alanstorm.com/magento_2_crud_models_for_database_access/),
[saviost](http://www.saviost.net/what-is-object-relation-mappingorm/),
[magenticians](https://magenticians.com/magento-weekly-roundup-001/)
- How do they relate to one another? [interactivated](https://www.interactivated.me/blog/what-is-repository-pattern-in-magento-2/),
[excellencemagentoblog](http://excellencemagentoblog.com/blog/category/magento2-module-development-series/)

### 4.2 Describe Entity Load & Save
- How entity load and save occurs?[github](https://github.com/magento-notes/magento2-exam-notes/blob/master/5.%20Using%20the%20Entity-Attribute-Value%20-EAV-%20Model/2.%20Demonstrate%20ability%20to%20use%20EAV%20entity%20load%20and%20save.md)
- How do you use the native Magento save/load process in the development process? [inchoo](https://inchoo.net/magento-2/cache/how-to-save-custom-data-cache-magento-2/)

### 4.3 Describe  filter, sort collections & repositories
- How to filter, sort & specify the selected values for collections & repositories?[rakeshjesadiya](https://www.rakeshjesadiya.com/get-product-collection-filter-using-service-contract/),[mage2-blog](https://mage2-blog.com/magento-2-get-product-collection/)
- How do you select a subset of records from the database? [mageplaza](https://www.mageplaza.com/devdocs/get-customer-collection-magento-2.html),[stackexchange](https://magento.stackexchange.com/questions/261154/search-criteria-builder-does-not-filter-an-out-of-stock-products?rq=1)

### 4.4 Demonstrate an ability to use declarative schema
- How do you add a column using declarative schema? [onilab](https://onilab.com/blog/declarative-schema-magento-2-3-and-higher/),[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html),
[cedcommerce](https://cedcommerce.com/blog/declarative-schema-in-magento-2-3/),[](https://www.idslogic.com/blog/2019/04/did-you-know-how-to-use-the-declarative-schema-in-magento-2-here-is-a-guide.html),[slideshare](https://www.slideshare.net/atishgoswami/magento-2-declarative-schema),
[stagebit](https://stagebit.com/magento-2/declarative-schema-magento-2-3/),[stagebit](https://stagebit.com/magento-2/declarative-schema-magento-2-3/)
- How do you modify a table added by another module??? [stackexchange](https://magento.stackexchange.com/questions/266635/magento-2-3-how-to-add-custom-column-to-customer-entity-table)
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
- Describe the database abstraction layer for Magento?
- What type of exceptions does the database layer throw?
- What additional functionality does Magento provide over Zend_Adapter?
### 4.2 Demonstrate an ability to use declarative schema
- Demonstrate use of schema.
- How to manipulate columns and keys using declarative schema?
- What is the purpose of whitelisting?
- How to use Data and Schema patches?
- How to manage dependencies between patch files?

## Magento 2 Certified Professional Developer Plus-14%

### 3.1 Demonstrate Db Access Classes(models,repositories & data mappers)
- Architectural layers of db  access classes, including models, repositories & data mappers?
- Models, resource models, and collections in Magento, their impact on performance?
- Repositories, SearchCriteria?
- WebAPI, WebAPI access, extension attributes?
- How to create an entity that supports extension attributes?
- How to implement SearchCriteria processing in the repository::getList method?
- How to perform bulk save operations in Magento?
- How to extend data object (Data API class) with an attribute that has values in a remote system?
- How to extend exisitng WebAPI calls with a new parameter?
- How to create a dynamic WebAPI ACL?
- The difference between extension attributes and custom attributes?
### 3.2 Demonstrate understanding of the staging workflow
- Staging modification to the Magento database operations (row_id, entity managers)
- How does data versioning work?
- Different possibilities of data versioning (row/table/database level) & implemented?
- The role of the entity manager?
- High level staging implementation overview?
### 3.3 Demonstrate an ability to use different types of setup scripts in Magento
- Schema and data setup scripts, uninstall scripts, recurring scripts, uninstall schema vs. uninstall data?
- What happens when an uninstall script is executed: data version change, deleted tables, etc?
- Recurring scripts and their order in the setup:upgrade process?
- Accessing areas and system configuration values in setup scrip?

***

# Magento 2  DB ALL Question Solution


****

## Magento 2 Certified Associate Developer-18%

### 4.1 Describe models, resource models & collections
- Basic concepts of models, resource models, and collections?
- What are the responsibilities of each of the ORM object types?
- How do they relate to one another?
### 4.2 Describe Entity Load & Save
- How entity load and save occurs?
- How do you use the native Magento save/load process in the development process?
### 4.3 Describe  filter, sort collections & repositories
- How to filter, sort, and specify the selected values for collections and repositories?
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
- Describe the database abstraction layer for Magento?
- What type of exceptions does the database layer throw?
- What additional functionality does Magento provide over Zend_Adapter?
### 4.2 Demonstrate an ability to use declarative schema
- Demonstrate use of schema.
- How to manipulate columns and keys using declarative schema?
- What is the purpose of whitelisting?
- How to use Data and Schema patches?
- How to manage dependencies between patch files?

## Magento 2 Certified Professional Developer Plus-14%

### 3.1 Demonstrate Db Access Classes(models,repositories & data mappers)
- Architectural layers of db  access classes, including models, repositories & data mappers?
- Models, resource models, and collections in Magento, their impact on performance?
- Repositories, SearchCriteria?
- WebAPI, WebAPI access, extension attributes?
- How to create an entity that supports extension attributes?
- How to implement SearchCriteria processing in the repository::getList method?
- How to perform bulk save operations in Magento?
- How to extend data object (Data API class) with an attribute that has values in a remote system?
- How to extend exisitng WebAPI calls with a new parameter?
- How to create a dynamic WebAPI ACL?
- The difference between extension attributes and custom attributes?
### 3.2 Demonstrate understanding of the staging workflow
- Staging modification to the Magento database operations (row_id, entity managers)
- How does data versioning work?
- Different possibilities of data versioning (row/table/database level) & implemented?
- The role of the entity manager?
- High level staging implementation overview?
### 3.3 Demonstrate an ability to use different types of setup scripts in Magento
- Schema and data setup scripts, uninstall scripts, recurring scripts, uninstall schema vs. uninstall data?
- What happens when an uninstall script is executed: data version change, deleted tables, etc?
- Recurring scripts and their order in the setup:upgrade process?
- Accessing areas and system configuration values in setup scrip?
