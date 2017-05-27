-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 27, 2017 alle 10:09
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
  `descrizione` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
('err_travel', 'Devi essere registrato per ottenere il tuo preventivo', 'it'),
('err_travel', 'You must be registered to get your quote', 'en'),
('err_travel', 'Вы должны быть зарегистрированы, чтобы получить цитату', 'ru'),
('err_travel', '你必须注册，以获得您的报价', 'cn'),
('err_travel', 'Vous devez être enregistré pour obtenir votre devis', 'fr'),
('home', 'PAGINA INIZIALE', 'it'),
('home', 'HOME', 'en'),
('home', 'ГЛАВНАЯ СТРАНИЦА', 'ru'),
('home', '主页', 'cn'),
('home', 'PAGE D\'ACCUEIL', 'fr'),
('local_select', 'Seleziona una destinazione', 'it'),
('local_select', 'Select a destination', 'en'),
('local_select', 'Выберите пункт назначения', 'ru'),
('local_select', '选择目的地', 'cn'),
('local_select', 'Sélectionnez une destination', 'fr'),
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
('logout', 'LOGOUT', 'it'),
('logout', 'LOGOUT', 'en'),
('logout', 'ВЫЙТИ', 'ru'),
('logout', '登出', 'cn'),
('logout', 'CONNECTEZ - OUT', 'fr'),
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
('sel_currency', 'Seleziona una valuta', 'it'),
('sel_currency', 'Please select a currency', 'en'),
('sel_currency', 'Выберите валюту', 'ru'),
('sel_currency', '选择货币', 'cn'),
('sel_currency', 'Sélectionnez une devise', 'fr'),
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
('uname_error', 'Username già usato', 'it'),
('uname_error', 'Username already in use', 'en'),
('uname_error', 'Имя пользователя уже используется', 'ru'),
('uname_error', '用户名已被使用', 'cn'),
('uname_error', 'Nom d\'utilisateur déjà utilisé', 'fr'),
('welcome', 'BENVENUTO<br><hr>ACCEDI PER AVERE IL TUO PREVENTIVO', 'it'),
('welcome', 'WELCOME<br><hr>SIGN-IN FOR OBTAIN A TRAVEL ESTIMATE', 'en'),
('welcome', 'ПРИГЛАШАЕМ<br><hr>ДОСТУП ПОЛУЧИТЬ ЦЕНУ', 'ru'),
('welcome', '欢迎您<br><hr>请登录获得报价', 'cn'),
('welcome', 'BIENVENUE<br><hr>ACCÈS À OBTENIR UN DEVIS', 'fr');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `cognome` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`uid`, `nome`, `cognome`, `password`, `username`, `email`) VALUES
(35, '/jjvu48y8u+Hj6E3d72PxBkH2kjswfm4RvkX9qcT57w=', 'EmEtPE2PaOi3NGugzxqB/YkW7itN2/gmekGVhfF6cu4=', '$2y$12$PHjLZRThLpNpGNKZ7IW/nONK3tVfAyOgWY.f0s03EJMsjegzMCmyu', 'UsC6R+8uB9Kl8JcWUGGc80ZXIvCK+Jn8rYgehrEEWh8=', 'seovoYj6TPTxLk2fU+G8hJ5RHlic2puyhLa86kJec5k='),
(36, '0f6aufjDuXFjtofYBJWrfgsp2RL4GWhzxM/m4zn58iI=', 'gg92/lR5+b1sPJiuBH+UvIOC1Fj9Lmh/kHQQ0nGtG20=', '$2y$12$wgsxHU1Vk4.v/2ab/Et8zOm07xN56tsXqlTi0a/SEbOr4wqJL1WI6', 'Z3ziLKLUukbSfNFPLvUEOkEBtgtytHMW7DUgt3ZVyqs=', 'jxI8dVz/boV9CNNGQ7/1sjfS9p/GS23+/LzOAgqtn2A='),
(37, 'zuTUOe3lZcuGuS2nWRE+6M6ZfQJLXF5AxmsRHY8GolM=', 'xLqV4y8JqGV8wn1wzHSuTgq1QK5bQuAdsb/qsxUu/Bk=', '$2y$12$EWk3LNXY5q8lBTOt1And8up9JDjsNXZSI.Mzjsb2H7m7ZxizKWV6m', '68D6xsxJQsTSsdBVndZTvP6UyI91Rk4xI9NyjQ6ao0E=', '4yiYas9YZd+cHe3IhFijyIMkopBlwFsKa8zn9ig79mA='),
(38, 'BGOrZLVOEFbARZ+kOOGNxACOvQ+YZ6V/KI/6Uyz/5b0=', 'R8Pnw+XeaxU0OgZlF6rZfauR9eemQhhHFwPrkHaU3xY=', '$2y$12$xlTAyFbd9R.q6aal4MiDLueeQeeQHACHu9h2nUQooMBEdPlRhxu.y', 'K25Kja+yixZ88OS68AttFL13gxKX1ol6zTcpfXaJlMw=', 'JVc3CV9FpS2y1qZr1lD2XxgJLjo3rplH/O/QgDJ+wDc='),
(39, 'zFmLFFhafJe094aDPMcmjD2OmCOT9B5RVgLG1fQL9Ns=', 'zFmLFFhafJe094aDPMcmjD2OmCOT9B5RVgLG1fQL9Ns=', '$2y$12$uAkxBH91Jzngj1qoWZdIa.aG/upKG.y9po9OMXvNihlrQS9VQMMKq', 'PpbV2cS0Wakc18vYb8L3dUpZZMFRsCrhRTzNtkfuYNc=', 'bWoNK1RpeObOOnQo8aA6g5D4b1Z0H7bec6OSJJWj6Cg=');

-- --------------------------------------------------------

--
-- Struttura della tabella `viaggi`
--

CREATE TABLE `viaggi` (
  `localita` varchar(255) NOT NULL,
  `prezzo` double NOT NULL,
  `id_viaggio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `viaggi`
--

INSERT INTO `viaggi` (`localita`, `prezzo`, `id_viaggio`) VALUES
('Rome', 750, 1),
('New York', 1658, 2),
('Zurich', 1024, 3),
('Bali', 2184, 4),
('Monk', 2057, 5),
('Munich', 1058, 6),
('Paris', 800, 7),
('Las Vegas', 1899, 8),
('Nassau', 3518, 9),
('Miami', 1518, 10),
('Toronto', 1274, 11),
('Tokio', 2118, 12),
('Athens', 512, 13),
('Venice', 816, 14),
('Barcellona', 489, 15),
('Tunis', 118, 16),
('Berlin', 678, 17),
('London', 777, 18),
('Innsbruck', 1984, 19),
('Amsterdam', 420, 20),
('Edinburgh', 657, 21),
('Dublin', 845, 22),
('Dubai', 3598, 23),
('Robecano City', 99999999, 24);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`lang_key`,`lang`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indici per le tabelle `viaggi`
--
ALTER TABLE `viaggi`
  ADD PRIMARY KEY (`id_viaggio`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT per la tabella `viaggi`
--
ALTER TABLE `viaggi`
  MODIFY `id_viaggio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
