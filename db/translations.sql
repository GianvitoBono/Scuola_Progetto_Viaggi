-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 23, 2017 alle 10:01
-- Versione del server: 10.1.21-MariaDB
-- Versione PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viaggi_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `translations`
--

CREATE TABLE `translations` (
  `lang_key` varchar(20) NOT NULL,
  `descrizione` text CHARACTER SET utf16 NOT NULL,
  `lang` enum('it','en','ru','cn','fr') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `translations`
--

INSERT INTO `translations` (`lang_key`, `descrizione`, `lang`) VALUES
('data_error', 'Riempire tutti i campi', 'it'),
('data_error', 'Fill in all the fields', 'en'),
('data_error', 'Пожалуйста, заполните все поля', 'ru'),
('data_error', '请填写所有字段', 'cn'),
('data_error', 'S\'il vous plaît remplir tous les champs', 'fr'),
('email', 'Email', 'it'),
('email', 'Email', 'en'),
('email', 'электронная почта', 'ru'),
('email', '电子邮件', 'cn'),
('email', 'Email', 'fr'),
('home', 'PAGINA INIZIALE', 'it'),
('home', 'HOME', 'en'),
('home', 'ГЛАВНАЯ СТРАНИЦА', 'ru'),
('home', '主页', 'cn'),
('home', 'PAGE D\'ACCUEIL', 'fr'),
('login', 'ACCEDI', 'it'),
('login', 'SIGN-IN', 'en'),
('login', 'ВОЙТИ В СИСТЕМУ', 'ru'),
('login', '登录', 'cn'),
('login', 'S\'IDENTIFIER', 'fr'),
('login _error', 'Wrong username or password', 'en'),
('login_error', 'Nome utente o password errati', 'it'),
('login_error', 'Неверное имя пользователя или пароль', 'ru'),
('login_error', '无效的用户名或密码', 'cn'),
('login_error', 'S\'il vous plaît remplir tous les champs', 'fr'),
('name', 'Nome', 'it'),
('name', 'First name', 'en'),
('name', 'имя', 'ru'),
('name', '名', 'cn'),
('name', 'Nom', 'fr'),
('passwd', 'Password', 'it'),
('passwd', 'Password', 'en'),
('passwd', 'Пароль', 'ru'),
('passwd', '密码', 'cn'),
('passwd', 'Mot de passe', 'fr'),
('re_passwd', 'Reinserisci password', 'it'),
('re_passwd', 'Retype password', 'en'),
('re_passwd', 'Повторно введите пароль', 'ru'),
('re_passwd', '重新输入密码', 'cn'),
('re_passwd', 'Ressaisissez le mot de passe', 'fr'),
('send', 'Invia', 'it'),
('send', 'Send', 'en'),
('send', 'послать', 'ru'),
('send', '发送', 'cn'),
('send', 'Envoyer', 'fr'),
('signup', 'REGISTATI', 'it'),
('signup', 'SIGN-UP', 'en'),
('signup', 'ЗАРЕГИСТРИРОВАТЬСЯ', 'ru'),
('signup', '寄存器', 'cn'),
('signup', 'REGISTRE', 'fr'),
('surname', 'Cognome', 'it'),
('surname', 'Surname', 'en'),
('surname', 'фамилия', 'ru'),
('surname', '姓', 'cn'),
('surname', 'Nom de famille', 'fr'),
('travel', 'PREVENTIVO VIAGGIO', 'it'),
('travel', 'TRAVEL ESTIMATE', 'en'),
('travel', 'ОЦЕНКА ПУТЕШЕСТВИЯ', 'ru'),
('travel', '旅行估价', 'cn'),
('travel', 'ESTIMATION DE VOYAGE', 'fr'),
('uname', 'Nome utente', 'it'),
('uname', 'Username', 'en'),
('uname', 'Имя пользователя', 'ru'),
('uname', '用户名', 'cn'),
('uname', 'Nom d\'utilisateur', 'fr'),
('welcom', '欢迎您<br><hr>请登录获得报价', 'cn'),
('welcome', 'BENVENUTO<br><hr>ACCEDI PER AVERE IL TUO PREVENTIVO', 'it'),
('welcome', 'WELCOME<br><hr>SIGN-IN FOR OBTAIN A TRAVEL ESTIMATE', 'en'),
('welcome', 'ПРИГЛАШАЕМ<br><hr>ДОСТУП ПОЛУЧИТЬ ЦЕНУ', 'ru'),
('welcome', 'BIENVENUE<br><hr>ACCÈS À OBTENIR UN DEVIS', 'fr');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`lang_key`,`lang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
