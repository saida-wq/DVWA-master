using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Id_transit
{
    #region Admin
    public class Admin
    {
        #region Member Variables
        protected int _id;
        protected string _nom;
        protected string _prenom;
        protected string _username;
        protected string _password;
        #endregion
        #region Constructors
        public Admin() { }
        public Admin(string nom, string prenom, string username, string password)
        {
            this._nom=nom;
            this._prenom=prenom;
            this._username=username;
            this._password=password;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nom
        {
            get {return _nom;}
            set {_nom=value;}
        }
        public virtual string Prenom
        {
            get {return _prenom;}
            set {_prenom=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        #endregion
    }
    #endregion
}