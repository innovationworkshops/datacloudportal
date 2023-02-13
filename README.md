# Data Cloud Demo Portal

The Demo Portal can be used as a CRUD app for any demo. It can be  branded (e.g., by uploading logos/images). Clicking on the deploy button will install this portal on your Heroku instance.

<a target="_blank" href="https://heroku.com/deploy?template=https://github.com/innovationworkshops/datacloudportal">
  <img src="https://www.herokucdn.com/deploy/button.svg" alt="Deploy">
</a>

With one-click deployment  using the Heroku Button, you will accomplish the following:

    * Install an instance of a MySQL database (JawsDB MySQL)
    * Create two tables in MySQL schema (Customers & Leads tables)
    * Deploy a pre-written PHP CRUD application 
    * Configure your PHP CRUD application to connect to the newly installed MySQL database

When you sign in to your Heroku instance, you can navigate to “https://dashboard.heroku.com/apps” to manage your newly installed app, add more resources from Heroku Elements (https://elements.heroku.com/), configure access & settings or monitor metrics & activity. 

## Loading Data into CDP Using Ingestion API (MySQL -> CDP)
* Defined Ingestion API from CDP Setup
* Created & uploaded a YAML file for the source database table (i.e., MySQL database on Heroku). The YAML file is available in the Resources directory of this repository.
* Created a Data Stream  
* I now have a Data Lake Object in which the data incoming from MySQL database table will land.
* Created a custom Data Model Object
* Created a data mapping from the Data Lake Object to my  Data Model Object
* Defined the MuleSoft Flow using Mule Cloud Designer (The JAR file is available in the resources directory of this repository).

The following illustrations explain the steps for loading data into CDP with MuleSoft CDP Connector. I have used the streaming feature of the ingestion API. The same Mule Connector can be leveraged for both batch as well as streaming capabilities of the API.

<img src="/resources/steps.jpg">
<p> &nbsp; </p>
<img src="/resources/screens.jpg">

## Safe Harbor, Caution
* This is not official Salesforce documentation. This is meant as a quick test/demo only. Not for production environments. Please use the official Salesforce & MuleSoft documentation for your project.
* <a href="https://developer.salesforce.com/docs/atlas.en-us.c360a_api.meta/c360a_api/c360a_api_salesforce_cdp_ingestion.htm" target="_blank"> Customer Data Platform Developer Guide</a> 
* <a href="https://docs.mulesoft.com/salesforce-cdp-connector/1.1/" target="_blank"> MuleSoft CDP Connector </a> 

Happy exploring!
