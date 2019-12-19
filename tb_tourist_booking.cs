using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Db_travel
{
    #region Tb_tourist_booking
    public class Tb_tourist_booking
    {
        #region Member Variables
        protected int _id_tourist_booking;
        protected int _kode_cust;
        protected string _kode_wisata;
        protected unknown _date_departure;
        protected int _jml_passenger;
        protected int _harga_detail;
        #endregion
        #region Constructors
        public Tb_tourist_booking() { }
        public Tb_tourist_booking(int kode_cust, string kode_wisata, unknown date_departure, int jml_passenger, int harga_detail)
        {
            this._kode_cust=kode_cust;
            this._kode_wisata=kode_wisata;
            this._date_departure=date_departure;
            this._jml_passenger=jml_passenger;
            this._harga_detail=harga_detail;
        }
        #endregion
        #region Public Properties
        public virtual int Id_tourist_booking
        {
            get {return _id_tourist_booking;}
            set {_id_tourist_booking=value;}
        }
        public virtual int Kode_cust
        {
            get {return _kode_cust;}
            set {_kode_cust=value;}
        }
        public virtual string Kode_wisata
        {
            get {return _kode_wisata;}
            set {_kode_wisata=value;}
        }
        public virtual unknown Date_departure
        {
            get {return _date_departure;}
            set {_date_departure=value;}
        }
        public virtual int Jml_passenger
        {
            get {return _jml_passenger;}
            set {_jml_passenger=value;}
        }
        public virtual int Harga_detail
        {
            get {return _harga_detail;}
            set {_harga_detail=value;}
        }
        #endregion
    }
    #endregion
}