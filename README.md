# Chain-Store-Database-Management
Course project of the course Database Design - CS315A - Winter 2016

## How to run
Clone the repository in apache directory and load chainStores.sql file in phpmyadmin. Open login.php page in the browser using appropriate path for your apache settings.

## Details of the Project
### Abstract
Chain store(s) or retail chain are retail outlets that share a brand and central management,
and usually have standardized business methods and practices. In retail, dining, and many
service categories, chain businesses have come to dominate the market in many parts of the
world. Almost all these chain businesses use sophisticated softwares and database systems to
improve efficiency and increase sales.   
This project aims to develop a database management system for such a chain business sys-
tem, particularly for this project a supermarket chain business, keeping record and transactions
of each store in the chain and handle changes due to sale or supply.

### Overview of Functionality
#### Data Description
The data would be collected from stores of chain business company. For demonstration, dummy
data of store transactions and products will be created and used. The data that will be used in
this projects will comprise of chain stores. Each chain store will have its independent data such
as address, products, profit, loss, transactions, supplier, supply, sales etc. Related to supplier
there will be supplier companys name, address, email, telephone. Customer data can also be
incorporated for each chain store. Additional data fields would also be added as per the project
needs and efficiency.
#### Classes of Users
There will be 3 types of user access:  
• Administrator  
• Store Owner  
• Store Receptionist  
The application will support user login of above three types. Store Owner accounts must be
created by the Administrator and Store Receptionist account must be created by the Store
Owner(or Admin).
##### User Privilege: Administrator
The administer will have the complete control and access over the whole data. The administra-
tor will have the access of back-end of the application. Also privilege to modify database at the
front-end web access will be provided to the admin user.
##### User Privilege: Store Owner
A Store Owner will have read only access over the whole data and read-add-modify access on
their store data. They can modify the data corresponding to his store. They will be provided
with front-end functionality to perform these tasks.
##### User Privilege: Store Receptionist
The Store Receptionist will have only read-add access to their corresponding store data. They
will also be provided with front-end functionality to perform these tasks.