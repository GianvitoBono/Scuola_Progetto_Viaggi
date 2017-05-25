using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Viaggi_db
{
    #region Translations
    public class Translations
    {
        #region Member Variables
        protected string _lang_key;
        protected string _descrizione;
        protected unknown _lang;
        #endregion
        #region Constructors
        public Translations() { }
        public Translations(string descrizione)
        {
            this._descrizione=descrizione;
        }
        #endregion
        #region Public Properties
        public virtual string Lang_key
        {
            get {return _lang_key;}
            set {_lang_key=value;}
        }
        public virtual string Descrizione
        {
            get {return _descrizione;}
            set {_descrizione=value;}
        }
        public virtual unknown Lang
        {
            get {return _lang;}
            set {_lang=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Viaggi_db
{
    #region Users
    public class Users
    {
        #region Member Variables
        protected int _uid;
        protected string _nome;
        protected string _cognome;
        protected string _password;
        protected string _username;
        protected string _email;
        #endregion
        #region Constructors
        public Users() { }
        public Users(string nome, string cognome, string password, string username, string email)
        {
            this._nome=nome;
            this._cognome=cognome;
            this._password=password;
            this._username=username;
            this._email=email;
        }
        #endregion
        #region Public Properties
        public virtual int Uid
        {
            get {return _uid;}
            set {_uid=value;}
        }
        public virtual string Nome
        {
            get {return _nome;}
            set {_nome=value;}
        }
        public virtual string Cognome
        {
            get {return _cognome;}
            set {_cognome=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Viaggi_db
{
    #region Viaggi
    public class Viaggi
    {
        #region Member Variables
        protected string _localita;
        protected unknown _prezzo;
        protected int _id_viaggio;
        #endregion
        #region Constructors
        public Viaggi() { }
        public Viaggi(string localita, unknown prezzo)
        {
            this._localita=localita;
            this._prezzo=prezzo;
        }
        #endregion
        #region Public Properties
        public virtual string Localita
        {
            get {return _localita;}
            set {_localita=value;}
        }
        public virtual unknown Prezzo
        {
            get {return _prezzo;}
            set {_prezzo=value;}
        }
        public virtual int Id_viaggio
        {
            get {return _id_viaggio;}
            set {_id_viaggio=value;}
        }
        #endregion
    }
    #endregion
}