﻿//------------------------------------------------------------------------------
// <autogenerated>
//     This code was generated by a tool.
//     Runtime Version: 1.1.4322.2032
//
//     Changes to this file may cause incorrect behavior and will be lost if 
//     the code is regenerated.
// </autogenerated>
//------------------------------------------------------------------------------

// 
// This source code was auto-generated by Microsoft.VSDesigner, Version 1.1.4322.2032.
// 
namespace testaWS.meteoWS {
    using System.Diagnostics;
    using System.Xml.Serialization;
    using System;
    using System.Web.Services.Protocols;
    using System.ComponentModel;
    using System.Web.Services;
    
    
    /// <remarks/>
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    [System.Web.Services.WebServiceBindingAttribute(Name="meteoBinding", Namespace="http://www.iscte.pt/meteo")]
    public class meteo : System.Web.Services.Protocols.SoapHttpClientProtocol {
        
        /// <remarks/>
        public meteo() {
            this.Url = "http://127.0.0.1/ce/ws01_01/meteo.php";
        }
        
        /// <remarks/>
        [System.Web.Services.Protocols.SoapRpcMethodAttribute("http://127.0.0.1/ce/ws01_01/meteo.php/temperatura", RequestNamespace="http://www.iscte.pt/meteo", ResponseNamespace="http://www.iscte.pt/meteo")]
        [return: System.Xml.Serialization.SoapElementAttribute("result_message")]
        public string temperatura(string cidade, out string max, out string min) {
            object[] results = this.Invoke("temperatura", new object[] {
                        cidade});
            max = ((string)(results[1]));
            min = ((string)(results[2]));
            return ((string)(results[0]));
        }
        
        /// <remarks/>
        public System.IAsyncResult Begintemperatura(string cidade, System.AsyncCallback callback, object asyncState) {
            return this.BeginInvoke("temperatura", new object[] {
                        cidade}, callback, asyncState);
        }
        
        /// <remarks/>
        public string Endtemperatura(System.IAsyncResult asyncResult, out string max, out string min) {
            object[] results = this.EndInvoke(asyncResult);
            max = ((string)(results[1]));
            min = ((string)(results[2]));
            return ((string)(results[0]));
        }
    }
}
