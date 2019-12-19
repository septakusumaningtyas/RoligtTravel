using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Db_travel
{
    #region Tb_tourist_booking_detail
    public class Tb_tourist_booking_detail
    {
        #region Member Variables
        protected int _no_transaksi;
        protected int _id_tourist_booking;
        protected string _bukti_trans;
        protected unknown _flag;
        #endregion
        #region Constructors
        public Tb_tourist_booking_detail() { }
        public Tb_tourist_booking_detail(int id_tourist_booking, string bukti_trans, unknown flag)
        {
            this._id_tourist_booking=id_tourist_booking;
            this._bukti_trans=bukti_trans;
            this._flag=flag;
        }
        #endregion
        #region Public Properties
        public virtual int No_transaksi
        {
            get {return _no_transaksi;}
            set {_no_transaksi=value;}
        }
        public virtual int Id_tourist_booking
        {
            get {return _id_tourist_booking;}
            set {_id_tourist_booking=value;}
        }
        public virtual string Bukti_trans
        {
            get {return _bukti_trans;}
            set {_bukti_trans=value;}
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