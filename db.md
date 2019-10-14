# Magento 2 Exam Working with Databases

## Magento 2 Certified Associate Developer-18%

### 4.1 Describe models, resource models & collections

- Basic concepts of models, resource models & collections?
 [codilar](https://www.codilar.com/blog/magento-2-models-resource-models-and-collections/),
[belvg](https://belvg.com/blog/database-in-magento-2-models-resource-models-and-collections.html),
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
- How to filter, sort & specify the selected values for collections & repositories?[rakeshjesadiya](https://www.rakeshjesadiya.com/get-product-collection-filter-using-service-contract/), [mage2-blog](https://mage2-blog.com/magento-2-get-product-collection/)
- How do you select a subset of records from the database? [mageplaza](https://www.mageplaza.com/devdocs/get-customer-collection-magento-2.html), [stackexchange](https://magento.stackexchange.com/questions/261154/search-criteria-builder-does-not-filter-an-out-of-stock-products?rq=1)

### 4.4 Demonstrate an ability to use declarative schema [ declarative](https://github.com/bdcrops/module-declarative)
- How do you add a column using declarative schema? [onilab](https://onilab.com/blog/declarative-schema-magento-2-3-and-higher/), [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html),
[cedcommerce](https://cedcommerce.com/blog/declarative-schema-in-magento-2-3/), [idslogic](https://www.idslogic.com/blog/2019/04/did-you-know-how-to-use-the-declarative-schema-in-magento-2-here-is-a-guide.html), [slideshare](https://www.slideshare.net/atishgoswami/magento-2-declarative-schema),
[stagebit](https://stagebit.com/magento-2/declarative-schema-magento-2-3/)
- How do you modify a table added by another module???[mod-declarative](https://github.com/bdcrops/module-declarative#how-do-you-modify-a-table-added-by-another-module), [stackexchange](https://magento.stackexchange.com/questions/266635/magento-2-3-how-to-add-custom-column-to-customer-entity-table)
- How do you delete a column?

- How do you add an index or foreign key using declarative schema? [declarative](https://github.com/bdcrops/module-declarative#how-do-you-delete-a-column),

- How do you manipulate data using data patches? [sushilkumar](https://www.sushilkumar.ind.in/blog/magento-2/declarative-schema-feature-in-magento-2/),

- What is the purpose of schema patches?
[github](https://github.com/bdcrops/module-declarative#what-is-the-purpose-of-schema-patches)

## Magento 2 Certified Professional Developer-7% +(EAV) Model 8%= 15%

### 4.1 Demonstrate ability to use data-related classes
- Describe repositories & data API classes? [belvg](https://belvg.com/blog/how-to-use-data-related-classes-repositories-and-data-api-in-magento-2.html) ,[vinaikopp](http://vinaikopp.com/2017/02/18/magento2_repositories_interfaces_and_webapi/),[]()
- How do you obtain an object or set of objects from the database using a repository? [dzone](https://dzone.com/articles/implementing-data-repositories),[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/searching-with-repositories.html)
- How do you configure and create a SearchCriteria instance using the builder?
[medium](https://medium.com/@dannynimmo/how-to-use-the-repository-pattern-in-magento-2-4914caa67eaa),
[alanstorm](https://alanstorm.com/magento_2_understanding_object_repositories/),
[stackexchange](https://magento.stackexchange.com/questions/107852/use-preconfigured-builders-e-g-for-searchcriteria-in-magento-2),
[ipfs-sec](https://ipfs-sec.stackexchange.cloudflare-ipfs.com/magento/A/question/107852.html),
[githubVinai](https://gist.github.com/Vinai/45281197672cd22cccf8),
[scommerce](https://www.scommerce-mage.com/blog/magento2-condition-type-search-filter.html),
[ibnab](https://www.ibnab.com/en/blog/magento-2/magento-2-for-developer-search-framwork),
[webkul](https://webkul.com/blog/how-to-use-search-criteria-in-custom-module/)
- How do you use Data/Api classes?
[belvg](https://belvg.com/blog/how-to-use-data-related-classes-repositories-and-data-api-in-magento-2.html),
[scommerce](https://www.scommerce-mage.com/blog/magento-2-how-to-create-custom-api.html),
[inchoo](https://inchoo.net/magento-2/repository-pattern-in-magento-2/),
[belvg](https://belvg.com/blog/how-to-use-data-related-classes-repositories-and-data-api-in-magento-2.html)
- Describe how to create and register new entities?
[coolblueweb](https://coolblueweb.com/blog/adding-a-customer-attribute-programmatically-in-magento-2/),
[blogtreat](http://www.blogtreat.com/how-to-add-new-customer-attribute-in-magento-2/)

- How do you add a new table to the database?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/db-schema.html)
- Describe the entity load and save process?
[stackexchange1](https://magento.stackexchange.com/questions/195682/what-and-why-is-the-proper-way-to-load-a-model), [stackexchange2](https://magento.stackexchange.com/questions/130658/how-should-i-save-new-or-updated-entities-of-models), [belvg](https://belvg.com/blog/eav-load-and-save-processes-in-magento-2.html)
- Describe how to extend existing entities.
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/extension_attributes/adding-attributes.html),
[devdocs.github](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.2/extension-dev-guide/extension_attributes/adding-attributes.html),
[ashsmith](https://www.ashsmith.io/magento2/using-extension-attributes-with-products/)

- What mechanisms are available to extend existing classes, for example by
adding a new attribute, a new field in the database, or a new related entity?
[yireo](https://www.yireo.com/blog/2019-05-18-extending-magento2-classes-by-composition),
[inchoo](https://inchoo.net/magento-2/overriding-classes-magento-2/),
[magenest](https://store.magenest.com/blog/how-to-override-core-class-magento-2/)

- Describe how to filter, sort, and specify the selected values for collections & repositories?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/searching-with-repositories.html),
[ipfs](https://ipfs-sec.stackexchange.cloudflare-ipfs.com/magento/A/question/91023.html),
[rakeshjesadiya](https://www.rakeshjesadiya.com/get-product-collection-filter-using-service-contract/)

- How do you select a subset of records from the database?
[stackexchange](https://magento.stackexchange.com/questions/109426/magento-2-how-to-select-fetch-data-from-database),
[belvg](https://belvg.com/blog/magento-2-database-group-operations.html),
[firebearstudio](https://firebearstudio.com/blog/magento-2-mysql-data-import.html)
- Describe the database abstraction layer for Magento?
[belvg](https://belvg.com/blog/database-in-magento-2-models-resource-models-and-collections.html), [stackexchange](https://magento.stackexchange.com/questions/171317/magento-2-difference-between-models-and-data-models), [medium](https://medium.com/@matthewhaworth1/understanding-data-persistence-in-magento-2-d3fefafc4f2e), [stackexchange](https://magento.stackexchange.com/questions/274411/magento-2-how-to-use-repositoryinterface-getlist-and-why)
- What type of exceptions does the database layer throw?
[stackexchange1](https://magento.stackexchange.com/questions/119992/exception-handling-in-magento-2), [devdocs](https://devdocs.magento.com/guides/v2.3/graphql/develop/exceptions.html), [stackexchange2](https://magento.stackexchange.com/questions/187946/exception-message-in-magento-2?rq=1), [stackexchange3](https://magento.stackexchange.com/questions/187946/exception-message-in-magento-2),
[mage2](https://mage2-blog.com/magento-2-display-success-and-error-messages/), [rollbar](https://rollbar.com/blog/magento-error-monitoring/)
- What additional functionality does Magento provide over Zend_Adapter?
[stackexchange](https://magento.stackexchange.com/questions/33981/magento-2-and-zend-framework-2/51464#51464
), [zend](https://framework.zend.com/manual/2.1/en/modules/zend.db.adapter.html), [elgentos](https://elgentos.nl/blog/magento-2-and-PSRs-now-what)

### 4.2 Demonstrate an ability to use declarative schema
- Demonstrate use of declarative schema?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/)
- How to manipulate columns and keys using declarative schema?
[declarative](https://github.com/bdcrops/module-declarative#magento-2-certified-professional-developer-exam),
[dckap](https://www.dckap.com/blog/declarative-schema-magento-2/)

- What is the purpose of whitelisting?
[declarative](https://github.com/bdcrops/module-declarative#what-is-the-purpose-of-whitelisting),
[idslogic](https://www.idslogic.com/blog/2019/04/did-you-know-how-to-use-the-declarative-schema-in-magento-2-here-is-a-guide.html)

- How to use Data and Schema patches?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/data-patches.html), [markshust](https://markshust.com/2019/02/19/create-product-attribute-data-patch-magento-2.3-declarative-schema/), [willfeeling](https://blog.willfeeling.com/2019/01/09/what-is-setup-path-data-on-magento-2-3/), [stagebit](https://stagebit.com/magento-2/declarative-schema-data-patch-magento-2-3/), [medium](https://medium.com/@mishra.anshu1710/how-to-add-a-category-attribute-using-data-patch-in-magento2-4031dcca15b0),
[stackexchange](https://magento.stackexchange.com/questions/264788/magento-2-3-insert-data-into-table-using-declarativeschema)

- How to manage dependencies between patch files?
[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/data-patches.html)

### 5.1 Demonstrate ability to use EAV model concepts
- Describe the EAV hierarchy structure. [docs](https://docs.magento.com/m2/ee/user_guide/stores/attribute-sets.html), [blog](http://blog.chapagain.com.np/magento-2-create-product-attribute-attribute-group-tab-attribute-set-programmatically/) , [meetanshi](https://meetanshi.com/blog/create-attribute-set-programmatically-in-magento-2/), [bsscommerce](https://bsscommerce.com/confluence/create-magento-2-product-attributes-custom-options-programmatically/) ,

- What happens when a new attribute is added to the system? [magestore](https://www.magestore.com/magento-2-tutrial/add-attributes-to-product-in-magento-2/)
- What is the role of attribute sets and attribute groups? [blogtreat](http://www.blogtreat.com/create-an-attribute-set-in-magento-2-via-installable-script/)
- How are attributes presented in the admin? [planetwebsolution](https://www.planetwebsolution.com/blog/how-to-create-magento-2-attributes/), [meetanshi](https://meetanshi.com/blog/update-product-attributes-in-bulk-in-magento-2/)
- Describe how EAV data storage works in Magento. [belvg](https://belvg.com/blog/how-to-manage-eav-attributes-including-interface-source-backend-structure-in-magento-2.html), [meigeeteam](https://meigeeteam.com/blog/where-to-find-all-attribute-properties-in-magento-2/)

- Which additional options do you have when saving EAV entities? [ibnab](https://www.ibnab.com/en/blog/magento-2/magento-2-add-custom-eav-attribute-to-category-or-customer), [rakeshjesadiya](https://www.rakeshjesadiya.com/how-to-set-firstname-and-lastname-with-minimum-character-required-in-magento-2/)
- How do you create customizations based on changes to attribute values? [meigeeteam](https://meigeeteam.com/blog/how-to-create-custom-product-attribute-in-magento-2/), [community](https://community.magento.com/t5/Find-an-Extension-that/How-To-Create-Customer-Custom-Attribute-In-Magento-2/td-p/115719)
- Describe the key differences between EAV and flat table collections.[ipfs]( https://ipfs-sec.stackexchange.cloudflare-ipfs.com/magento/A/question/105341.html), [amasty](https://amasty.com/blog/improve-magento-2-performance-with-flat-catalog/)
- In which situations would you use EAV for a new entity? [meetanshi](https://www.magestore.com/magento-2-tutorial/category/magento-2-tips/), [](https://meetanshi.com/blog/add-eav-attribute-for-product-magento-2/)
- What are the pros and cons of EAV architecture? [magentoplanet](https://magentoplanet.wordpress.com/tag/advantages-and-disadvantages-of-eav-model/), [w3ctrl](http://www.w3ctrl.com/blog/most-important-magento-2-interview-quesion/), [amasty](https://amasty.com/blog/improve-magento-2-performance-with-flat-catalog/)

### 5.2 Demonstrate ability to use EAV entity load and save
- Describe EAV load & save process and differences from flat table load & save process. [belvg](https://belvg.com/blog/eav-load-and-save-processes-in-magento-2.html),
[siphor](https://www.siphor.com/magento-eav-loading-and-saving/), [stackexchange](https://magento.stackexchange.com/questions/130658/how-should-i-save-new-or-updated-entities-of-models), [github](https://github.com/magento-notes/magento2-exam-notes/blob/master/5. Using the Entity-Attribute-Value -EAV- Model/2. Demonstrate ability to use EAV entity load and save.md)
- What happens when an EAV entity has too many attributes? [stackoverflow](https://stackoverflow.com/questions/39195762/eav-is-bad-but-how-about-the-maintainability-of-class-table-inheritance)
- How does the number of websites/stores affect the EAV load/save process? [progostech](https://progostech.com/how-to-increase-performance-and-handle-more-orders-on-your-magento-2-online-shop-during-the-holidays/)
- How would you customize  load & save process for an EAV entity in  situations described here? [github](https://github.com/magento-notes/magento2-exam-notes/blob/master/5. Using the Entity-Attribute-Value -EAV- Model/2. Demonstrate ability to use EAV entity load and save.md)


### 5.3 Demonstrate ability to manage attributes
- Describe EAV attributes, including the frontend/source/backend structure. [belvg](  https://belvg.com/blog/how-to-manage-eav-attributes-including-interface-source-backend-structure-in-magento-2.html)
- How would you add dropdown/multiselect attributes? [stackexchange](https://magento.stackexchange.com/questions/201226/create-product-attribute-of-type-multiselect-or-dropdown-select-create-option)
- What other possibilities do you have when adding an attribute (to a product, for example)?[magestore](https://www.magestore.com/magento-2-tutorial/add-attributes-to-product-in-magento-2/)
- Describe how to implement the interface for attribute frontend models. [github](https://github.com/magento-notes/magento2-exam-notes/blob/master/5. Using the Entity-Attribute-Value -EAV- Model/2. Demonstrate ability to use EAV entity load and save.md)
- What is the purpose of this interface?[devdocs](https://magento-devdocs.github.io/devdocs-for-tests/guides/v2.0/extension-dev-guide/attributes.html)
- How can you render your attribute value on the frontend?[stackexchange](https://magento.stackexchange.com/questions/85453/product-attribute-front-end-html-not-rendering-properly)
- Identify the purpose and describe how to implement the interface for attribute source models.[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/attributes.html)
- For a given dropdown/multiselect attribute, how can you specify and manipulate its list of options?[devdocs](https://devdocs.magento.com/videos/fundamentals/add-new-product-attribute/)
- Identify the purpose and describe how to implement the interface for attribute backend models.[github](https://github.com/magento/magento2/issues/23828)
- How (and why) would you create a backend model for an attribute?[belvg](https://belvg.com/blog/how-eav-data-storage-works-in-magento-2-part-4.html)
- Describe how to create and customize attributes.[devdocs](https://devdocs.magento.com/videos/fundamentals/add-new-product-attribute/)
- How would you add a new attribute to the product, category or customer entities?[stackexchange](https://magento.stackexchange.com/questions/88245/magento-2-how-to-create-a-customer-custom-attribute),[magestore](https://blog.magestore.com/entity-attribute-value-in-magento/)
- What is the difference between adding a new attribute and modifying an existing one?
[zynovo](https://www.zynovo.com/blog/magento-2-extension-attributes/)
[magecom](https://magecom.net/attributes-and-attribute-set-planning-creation-in-magento-2/)



## Magento 2 Certified Professional Developer Plus-14% +(EAV) Model 10%=24%

### 3.1 Demonstrate Db Access Classes(models,repositories & data mappers)
- Architectural layers of db  access classes, including models, repositories & data mappers?[belvg](https://belvg.com/blog/database-in-magento-2-models-resource-models-and-collections.html), [crosp](https://crosp.net/blog/software-architecture/clean-architecture-part-1-databse-vs-domain/
), [devdocs](https://devdocs.magento.com/guides/v2.3/architecture/archi_perspectives/persist_layer.html)
- Models, resource models, and collections in Magento, their impact on performance? [magenteiro](https://www.magenteiro.com/blog/magento-2/models-resource_models-collections/), [stackexchange](https://magento.stackexchange.com/questions/268974/magento-2-difference-between-model-resourcemodel-collection-and-repository), [hellomagento2](https://www.hellomagento2.com/pratices-tests-collections/
- Repositories, SearchCriteria?[fishchenko] (https://fishchenko.com/blog/magento-2-join-table-in-orderrepositorygetlist-extension-attributes/), [stackexchange](https://magento.stackexchange.com/questions/274411/magento-2-how-to-use-repositoryinterface-getlist-and-why), [offset101](https://www.offset101.com/magento-2-x-manage-multiple-conditions-filter-filtergroups/), [ibnab](https://www.ibnab.com/en/blog/magento-2), [willfeeling](https://blog.willfeeling.com/2019/06/24/magento2-dump-questions-package-1/), [ipfs](https://ipfs-sec.stackexchange.cloudflare-ipfs.com/magento/A/question/200941.html)

- WebAPI, WebAPI access, extension attributes? [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/webapi/request-processor-pool.html), [mageseller](https://www.mageseller.com/blog/extension-attributes-in-magento-2.html), [stackexchange](https://magento.stackexchange.com/questions/tagged/extension-attributes?sort=votes), [bizspice](https://www.bizspice.com/blog/post/magento-2-web-api-calls-explained), [belvg](https://belvg.com/blog/how-to-use-magento-2-api-documentation-examples-tutorial.html), [dckap](https://www.dckap.com/blog/extension-attributes-in-magento2/)

- How to create an entity that supports extension attributes?[tigren](https://www.tigren.com/add-extension-attribute-magento-2/), [community](https://community.magento.com/t5/Magento-2-x-Programming/How-i-can-work-with-extension-attributes-using-collection/td-p/136765), [devdocs](https://devdocs.magento.com/guides/v2.3/graphql/queries/custom-attribute-metadata.html), [omsdocs](https://omsdocs.magento.com/en/features-processes/order-modification/custom-attributes/), [magentodeveloper](https://magentodeveloper.in/add-custom-attribute-to-customer-magento2.html)

- How to implement SearchCriteria processing in the repository::getList method?[stackexchange](https://magento.stackexchange.com/questions/274411/magento-2-how-to-use-repositoryinterface-getlist-and-why), [rakeshjesadiya](https://www.rakeshjesadiya.com/how-to-get-list-of-customers-order-using-graphql-magento-2/), [fishchenko](https://fishchenko.com/blog/magento-2-join-table-in-orderrepositorygetlist-custom-field/), [devdocs](https://devdocs.magento.com/swagger/index_23.html)

- How to perform bulk save operations in Magento? [devdocs](https://devdocs.magento.com/guides/v2.3/rest/bulk-endpoints.html), [stackexchange](https://magento.stackexchange.com/questions/281723/magento-2-bulk-actions-not-starting), [itegration](https://itegration.com/tech/magento-bulk-api/), [meetanshi](https://meetanshi.com/blog/update-product-attributes-in-bulk-in-magento-2/), [webnexs](https://www.webnexs.com/blog/kb/add-update-multiple-records-database-magento-2/)

- How to extend data object (Data API class) with an attribute that has values in a remote system? [codilar]https://www.codilar.com/blog/data-objects-magento-2/ [magestore](https://www.magestore.com/magento-2-tutorial/magento-2-api-how-to-implement/), [scommerce](https://www.scommerce-mage.com/blog/magento-2-how-to-create-custom-api.html), [stackoverflow](https://stackoverflow.com/questions/55189662/how-do-i-pass-a-json-array-to-an-api-method)

- How to extend exisitng WebAPI calls with a new parameter? [community](https://community.magento.com/t5/Magento-2-x-Programming/Rest-API-call-to-get-cartId-for-active-guest-user-and-logged-in/td-p/113444), [bizspice](https://www.bizspice.com/blog/post/create-or-develop-new-product-type-in-magento-2), [borngroup](https://www.borngroup.com/gen-2-headless-with-graphql/)
- How to create a dynamic WebAPI ACL?[](https://www.phpro.be/en/rest-api-with-magento-2), [amasty](https://amasty.com/blog/magento-2-certification-configuration-files-visibility-areas/), [stackoverflow](https://stackoverflow.com/questions/21842866/magento-rest-api-create-method-resource-method-not-implemented)
- The difference between extension attributes and custom attributes?[stackexchange](https://magento.stackexchange.com/questions/215989/magento-2-what-is-difference-between-extension-attributes-and-custom-attribute), [atwix](https://www.atwix.com/magento-2/adding-custom-attribute-to-api-response-in-magento-2/), [dckap](https://www.dckap.com/blog/extension-attributes-in-magento2/), [zynovo](https://www.zynovo.com/blog/magento-2-extension-attributes/)

### 3.2 Demonstrate understanding of the staging workflow
- Staging modification to the Magento database operations (row_id, entity managers) [stackexchange](https://magento.stackexchange.com/questions/139081/magento-2-what-is-the-difference-between-the-row-id-and-entity-id-in-the-enti)
- How does data versioning work? [yireo](https://www.yireo.com/blog/2019-05-10-local-composer-development-with-magento2), [handybackup](https://www.handybackup.net/magento-backup.shtml)
- Different possibilities of data versioning (row/table/database level) & implemented? [stackexchange](https://magento.stackexchange.com/questions/129879/magento2-database-changes-details-in-each-update)
- The role of the entity manager? [yireo](https://www.yireo.com/blog/2016-07-18-working-with-the-new-magento-2-1-entity-manager), [stackexchange](https://magento.stackexchange.com/questions/127325/magento-2-1-using-the-entity-manager
), [magentoextensions](https://www.magentoextensions.org/documentation/class_magento_1_1_framework_1_1_entity_manager_1_1_entity_manager.html), [hotexamples](https://hotexamples.com/examples/magento.framework.entitymanager/EntityManager/save/php-entitymanager-save-method-examples.html)

- High level staging implementation overview?[devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/staging.html), [devdocs](https://devdocs.magento.com/guides/v2.3/cloud/basic-information/starter-architecture.html)

### 3.3 Demonstrate an ability to use different types of setup scripts in Magento
- Schema and data setup scripts, uninstall scripts, recurring scripts, uninstall schema vs. uninstall data? [inchoo](https://inchoo.net/magento-2/setup-scripts-magento-2/), [devdocs](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/declarative-schema/migration-commands.html)
- What happens when an uninstall script is executed: data version change, deleted tables, etc? [inviqa](https://inviqa.com/blog/using-setup-scripts-magento-2)
- Recurring scripts and their order in the setup:upgrade process? [dev98](https://dev98.de/2017/11/13/sequence-of-magento-2-install-upgrade-recurring-scripts/)
- Accessing areas and system configuration values in setup scrip?[inviqa](https://inviqa.com/blog/how-use-system-configuration-and-helpers-magento-2)



### 4.1 Describe the EAV data access process in Magento
- Getting an attribute instance, impact of attribute sets, large number of attributes and attribute sets? [](
- What is the impact of 10,000 attribute sets? 1,000 attributes in a set?[](
- How to get information about an attribute? [](
- How to perform attribute operations programmatically: assign it to a set/group, update properties, etc? [](

### 4.2 Describe the database tables for EAV entities and how to create them
- The EAV database structure, performance considerations, entity-level attribute properties (catalog_eav_attribute) [](
- Where are catalog-specific attribute properties stored and what are they used for?[](
- How does Magento store the attribute to attribute group association?[](
- What backend types are available? How do you add a new backend type?[](
- Specifics around static attributes? [](

### 4.3 Demonstrate an ability to operate with attribute options
- Different ways to store attribute options. Using eav_attribute_option_* tables? [](
- Config base, database base options? [](
- The eav_attribute_option_ table: tables that contain shared options between different entities, pros and cons of using the table? [](
### 4.4 Demonstrate an ability to use non-catalog EAV entities
- Adding an attribute to Customer, Customer Address and Sales entities?[](
- Making an attribute visible in the Admin or the storefront? [](
- Pitfalls in attributes operations in non-catalog EAV attributes? [](
- Adding an attribute to customers, saving and loading the attribute, problems related to the save process? [](
- What is the role of attribute sets and groups for customer attributes? [](
- Adding an attribute to customer addresses, the role of the ""is_system"" property and why it only works for the Customer Address entity? [](
- How to make a customer or customer address attribute visible in the My Account, Checkout, and Admin pages? [](
- What is the purpose of the SalesSetup class?[](
- Why do you use the addAttribute method for sales entities?[](

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
