# **RestoHub**

![RestoHub](https://github.com/Xoriax/Challenge-Web-Efrei/blob/main/Challenge_Web_Project/asset/RESTOHUB.jpg?raw=true)
-
### **Description**

>This project is a website that acts as a restaurant register.
>
>In this project what was used is PHP in Object Oriented Programming, HTML/CSS/JS, AlpineJS, Bootstrap as well as an MVC Arcitecture.

-------
### **Pré-requis**
| Steps | Action                                                                                                            | Complements                                                                                                                                                                                                                                                      |
| ----- | ----------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1     | Download Visual Studio Code                                                                                       | https://code.visualstudio.com/Download                                                                                                                                                                                                                           |
| 2     | Download wampserver                                                                                               | https://www.wampserver.com/                                                                                                                                                                                                                                      |
| 3     | After downloading wamp, launch it, then go to the taskbar, left-click on the wamp icon and install the extension. | ![Wamp](https://media.discordapp.net/attachments/1189316878460518441/1196390226986287134/Capture_decran_96.png?ex=65b77439&is=65a4ff39&hm=9659c190de0a65b14fb139cb0e3ce58ba1c9602a1cf1f18efe0831265ebb05a8&=&format=webp&quality=lossless&width=1248&height=701) |
| 4     | Dowload  postgreSQL                                                                                               | https://www.postgresql.org/                                                                                                                                                                                                                                      |
| 5     | Download all files on GitHub                                                                                      | https://github.com/Xoriax/Challenge-Web-Efrei                                                                                                                                                                                                                    |
----------
### **Others Informations**
>For each application, use the most recent version available.
| Software           | Version        |
| ------------------ | -------------- |
| Visual Studio Code | current 1.85.1 |
| WampServer         | current 3.3.2  |
| PostgreSQL         | current 16     |
----------
### **Installation**

| Steps | Action                                                                                                                                                                                                                                                                                                     | Complements                                                                                                                                                                                                                                                             |
| ----- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1     | launch ``pgadmin4`` and create a new Database                                                                                                                                                                                                                                                              | ![database.php](https://media.discordapp.net/attachments/1189316878460518441/1196395094643839096/Capture_decran_98.png?ex=65b778c2&is=65a503c2&hm=d4c9964a42d8845aea1c7c1a4b89ee2d11b855e4185c506cd804305c5337a784&=&format=webp&quality=lossless&width=563&height=443) |
| 2     | Enter the name of your Database                                                                                                                                                                                                                                                                            | ![database](https://media.discordapp.net/attachments/1189316878460518441/1197141412777566248/Capture_decran_100.png?ex=65ba2fd2&is=65a7bad2&hm=421f5960fbfb594e6e2267a814395a3a3543bed90fcd8bae04bc9af323b35e14&=&format=webp&quality=lossless&width=897&height=701)    |
| 3     | Once the Database has been created, go to schemas, then right-click and create a new schema.                                                                                                                                                                                                               | ![database](https://media.discordapp.net/attachments/1189316878460518441/1197141448575955076/Capture_decran_103.png?ex=65ba2fdb&is=65a7badb&hm=6f6b2621ec30317df38acc389b00b4d006c21019aa0076c9455809f0b18a3598&=&format=webp&quality=lossless&width=938&height=700)    |
| 4     | Enter a name for your schema, once the name has been chosen click on save                                                                                                                                                                                                                                  | ![database](https://media.discordapp.net/attachments/1189316878460518441/1197141463235039323/Capture_decran_104.png?ex=65ba2fde&is=65a7bade&hm=1da06e544d88f5437fe7a85c6ee22baa330595eeaf7a0838faed692a1a172304&=&format=webp&quality=lossless&width=943&height=701)    |
| 5     | Once the schema has been created, press ``alt shift q`` to open the ``Query Too``.                                                                                                                                                                                                                         | ![database](https://media.discordapp.net/attachments/1189316878460518441/1197141501264793690/Capture_decran_105.png?ex=65ba2fe7&is=65a7bae7&hm=1d21554e32ae1f2687da4b7bf465facc8944e73c38df5c43d622bd6bff536227&=&format=webp&quality=lossless&width=938&height=701)    |
| 6     | Once the ``Query Tool`` is open, copy the SQL code [here](https://github.com/Xoriax/Challenge-Web-Efrei/blob/main/CW-BDD/create_table_CWBDD.sql).                                                                                                                                                          | ![database](https://media.discordapp.net/attachments/1189316878460518441/1197141532466217040/Capture_decran_107.png?ex=65ba2fef&is=65a7baef&hm=822440b044cf1d541cd483796276fb4ebb0aba2eeaa52656eb9c86f68917ee9e&=&format=webp&quality=lossless&width=938&height=701)    |
| 7     | After the SQL is copied to the ``Query Tool``, create the tables one by one                                                                                                                                                                                                                                | ![database](https://media.discordapp.net/attachments/1189316878460518441/1197141541622390826/Capture_decran_108.png?ex=65ba2ff1&is=65a7baf1&hm=71e99885cb3bef418dbe38252b97871fa78d4257e27119362ca7a94798bf4182&=&format=webp&quality=lossless&width=940&height=701)    |
| 8     | Once the tables have been created, it's time to add the examples. To do this, copy the SQL code [here](https://github.com/Xoriax/Challenge-Web-Efrei/blob/main/CW-BDD/insert_example_CWBDD.sql). After each ``INSERT INTO``, remember to run a ``SELECT`` to check that it has been saved in the Database. | ![database](https://media.discordapp.net/attachments/1189316878460518441/1197141551667740744/Capture_decran_109.png?ex=65ba2ff3&is=65a7baf3&hm=87e26d42f289fbe6ff0d150c586fb58e6e6bc33f13474ed34bb39338527c13dc&=&format=webp&quality=lossless&width=938&height=701)    |
| 9     | After uploading all the files to [GitHub](https://github.com/Xoriax/Challenge-Web-Efrei/tree/main), in the ``Database.php`` file change the info (Host, Name, User, Password, Port)                                                                                                                        | ![database.php](https://cdn.discordapp.com/attachments/1189316878460518441/1196392686731677726/Capture_decran_97.png?ex=65b77684&is=65a50184&hm=92e937a18a2322b64fe672710b062329b03693d1b235436faa735b41c7dc21a2&)                                                      |
----------
### **Utilissation**

| Steps | Action                                                         | Complements                                                                                                                                                                                                                                                               |
| ----- | -------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1     | Open a new tab and go to localhost                             | ![database.php](https://media.discordapp.net/attachments/1189316878460518441/1196396345607602246/Capture_decran_99.png?ex=65b779ec&is=65a504ec&hm=262c1961b1c8673798650c0a0ee2f3315161c4cb6fd7f7f90fd8f569c2577f00&=&format=webp&quality=lossless&width=690&height=141)   |
| 2     | Once on the localhost page, locate the project name            | ![database.php](https://media.discordapp.net/attachments/1189316878460518441/1197175959527374898/Capture_decran_117.png?ex=65ba4fff&is=65a7daff&hm=9b06e5cd068cce9871fab5bbf2e5ea958aa6c61dccadacd5d0cc0c2ac6d3814e&=&format=webp&quality=lossless&width=1437&height=701) |
| 3     | Once you have found the project name, do as shown in the image | ![database.php](https://media.discordapp.net/attachments/1189316878460518441/1197176558985674752/Capture_decran_118.png?ex=65ba508e&is=65a7db8e&hm=ba34c137cb688cd35d0a68e08759d9841166272de1c542594d3db35e2b2f2643&=&format=webp&quality=lossless&width=1440&height=98)  |
----------
### **Mind Map**
![MindMap](https://cdn.discordapp.com/attachments/1189316878460518441/1197181247424843806/Purple_Colorful_Organic_Mind_Map_Brainstorm.png?ex=65ba54eb&is=65a7dfeb&hm=d4af75a94d83dac6a647e78882b7f35106e436bf5ed217e5c4a23f9685e37ce7&)
---
### **contributors**
>This project was made possible with the contribution of 
>
>- Johary Rakotonirina: 
>   - GitHub : https://github.com/Babajii91
>   - Linkdln : https://www.linkedin.com/in/johary-rakotonirina-b902a324b/
>
>- Sami Amokrane: 
>   - GitHub : https://github.com/BabyNewCode
>   - Linkdln : https://www.linkedin.com/in/sami-amokrane-2b0a9a253/
>
>- Sergio Léon Osias:
>   - GitHub : https://github.com/Sernny1369
>   - Linkdln : https://www.linkedin.com/in/sergio-leon-osias/
---
### **Other Projects** 

>* [SmartBike](https://github.com/Xoriax/MVC-Project-SB)
>* [EfreiPicture](https://github.com/Xoriax/PHP-Project-EP)

-----
