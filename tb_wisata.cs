using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Db_travel
{
    #region Tb_wisata
    public class Tb_wisata
    {
        #region Member Variables
        protected string _kode_wisata;
        protected string _nama_wisata;
        protected int _harga;
        protected unknown _flag;
        #endregion
        #region Constructors
        public Tb_wisata() { }
        public Tb_wisata(string nama_wisata, int harga, unknown flag)
        {
            this._nama_wisata=nama_wisata;
            this._harga=harga;
            this._flag=flag;
        }
        #endregion
        #region Public Properties
        public virtual string Kode_wisata
        {
            get {return _kode_wisata;}
            set {_kode_wisata=value;}
        }
        public virtual string Nama_wisata
        {
            get {return _nama_wisata;}
            set {_nama_wisata=value;}
        }
        public virtual int Harga
        {
            get {return _harga;}
            set {_harga=value;}
        }
        public virtual unknown Flag
        {
            get {return _flag;}
            set {_flag=value;}
        }
        #endregion
    }
    #endregion
}