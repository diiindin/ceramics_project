<h1 align="center"><a href="https://ceramicspro.herokuapp.com/" target="_blank">Ceramics Shop</a></h1>

## About Project

This is the online shop that sells different ceramic handicrafts. It has various functions, such as:

- Seeing all stuff in the main page
- Categories of the stuff
- Email sending functionality
- Localization
- Adding stuff to the cart
- Uploading a photo [png, jpeg]
- Make an order

In this project I used the php Laravel framework, PHPMyAdmin as a database, bootstrap, jQuery libraries, Heroku.com for deploying, Mailtrap.io for sending messages

## Database

There are two tables: Categories and Products. The ceramics_id is a foreign key that is connecting them. The relation between tables is 'one to many' because each product has only one category and each category may have many produtcs.

## Localization

My website supports two languages: Russian (main) and English
