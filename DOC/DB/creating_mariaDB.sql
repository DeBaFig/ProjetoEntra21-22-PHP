START TRANSACTION;
DROP TABLE IF EXISTS comments;
DROP TABLE IF EXISTS items;
DROP TABLE IF EXISTS item_user;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS chat_message;
DROP TABLE IF EXISTS private_messages;
DROP TABLE IF EXISTS item_subcategories;
DROP TABLE IF EXISTS item_categories;
DROP TABLE IF EXISTS account_types;
DROP TABLE IF EXISTS phones;
DROP TABLE IF EXISTS addresses;
CREATE TABLE addresses (
    id_address SERIAL PRIMARY KEY,
    id_list_address int,
    cep_address int,
    number_address int,
    complement_address varchar(50),
    INDEX (id_list_address)
);
CREATE TABLE phones (
    id_phone int,
    id_list_phone int,
    number_phone int,
    ddd_phone TINYINT(1),
    verify_status_phone TINYINT(1) DEFAULT 0,
    PRIMARY KEY(id_phone),
    INDEX (id_list_phone)
);
CREATE TABLE account_types(
    id_account_type int AUTO_INCREMENT,
    name_account_type varchar(50),
    PRIMARY KEY(id_account_type)
);
CREATE TABLE item_categories (
    id_category int AUTO_INCREMENT,
    name_category varchar(50),
    PRIMARY KEY(id_category)
);
CREATE TABLE item_subcategories (
    id_subcategory int AUTO_INCREMENT,
    name_subcategory varchar(255),
    id_category int,
    PRIMARY KEY(id_subcategory),
    foreign key(id_category) references item_categories(id_category)
);
CREATE TABLE private_messages (
    id_private_message int AUTO_INCREMENT,
    date_private_message DATE,
    text_private_message varchar(255),
    PRIMARY KEY(id_private_message)
);
CREATE TABLE chat_message(
    id_chat_message INT AUTO_INCREMENT,
    id_private_message INT,
    PRIMARY KEY (id_chat_message),
    foreign key(id_private_message) references private_messages(id_private_message)
);
CREATE TABLE users (
    id_user int AUTO_INCREMENT,
    id_account_type int,
    id_list_phone int,
    id_list_address int,
    id_chat_message INT,
    name_user varchar(50),
    last_name_user varchar(50),
    email_user varchar(255),
    verify_status_email TINYINT(1) DEFAULT 0,
    login_user varchar(25) UNIQUE,
    passphrase_user varchar(50),
    cpf_user INT UNIQUE,
    status_user TINYINT DEFAULT 1,
    creation_user DATE NOT NULL,
    facebook_user varchar(255),
    instagram_user varchar(255),
    PRIMARY KEY(id_user),
    foreign key(id_account_type) references account_types(id_account_type),
    foreign key(id_list_phone) references phones(id_list_phone),
    foreign key(id_list_address) references addresses(id_list_address),
    foreign key(id_chat_message) references chat_message(id_chat_message)
);
CREATE TABLE item_user (
    id_item_user int(11),
    id_user int(11),
    PRIMARY KEY (id_item_user),
    foreign key(id_user) references users(id_user)
);
CREATE TABLE items (
    id_item int AUTO_INCREMENT,
    id_address int,
    id_subcategory int,
    id_item_user INT,
    title_item varchar(150) NOT NULL,
    status_item TINYINT(1) DEFAULT 1,
    creation_item DATE NOT NULL,
    negotiate_item TINYINT(1) NOT NULL,
    max_price_item float NOT NULL,
    min_price_item float NOT NULL,
    new_item TINYINT(1) NOT NULL,
    quantity_item int NOT NULL DEFAULT 1,
    description_item varchar(255) DEFAULT ' ',
    reference_link_item varchar(255),
    photo_one_item varchar(255) DEFAULT ' ',
    photo_two_item varchar(255) DEFAULT ' ',
    photo_three_item varchar(255) DEFAULT ' ',
    PRIMARY KEY (id_item),
    foreign key(id_address) references addresses(id_address),
    foreign key(id_subcategory) references item_subcategories(id_subcategory),
    foreign key(id_item_user) references item_user(id_item_user)
);
CREATE TABLE comments (
    id_comment int AUTO_INCREMENT,
    id_item_user INT(11),
    text_comment varchar(255),
    PRIMARY KEY(id_comment),
    foreign key(id_item_user) references item_user(id_item_user)
);
COMMIT;