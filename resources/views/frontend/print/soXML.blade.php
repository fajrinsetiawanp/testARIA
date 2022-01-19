<ENVELOPE>
 <HEADER>
  <TALLYREQUEST>{{ $order->no_so }}</TALLYREQUEST>
 </HEADER>
 <BODY>
  <IMPORTDATA>
   <REQUESTDESC>
    <REPORTNAME>VOUCHERS</REPORTNAME>
    <STATICVARIABLES>
     <SVCURRENTCOMPANY>PT. {{ $orderPT }}</SVCURRENTCOMPANY>
    </STATICVARIABLES>
   </REQUESTDESC>
   <REQUESTDATA>
    <TALLYMESSAGE xmlns:UDF="TallyUDF">
     <VOUCHER REMOTEID="5b84a82f-0d6d-484f-af88-c4014bab7de4-00002fe6" VCHKEY="5b84a82f-0d6d-484f-af88-c4014bab7de4-0000a9a5:000000a8" VCHTYPE="Sales Order" ACTION="Create" OBJVIEW="Invoice Voucher View">
      <ADDRESS.LIST TYPE="String">
       <ADDRESS>JL. HALIM PERDANAKUSUMA NO.1</ADDRESS>
      </ADDRESS.LIST>
      <BASICBUYERADDRESS.LIST TYPE="String">
       <BASICBUYERADDRESS>JL. HALIM PERDANAKUSUMA NO.1</BASICBUYERADDRESS>
      </BASICBUYERADDRESS.LIST>
      <BASICORDERTERMS.LIST TYPE="String">
       <BASICORDERTERMS>Ecomm</BASICORDERTERMS>
      </BASICORDERTERMS.LIST>
      <OLDAUDITENTRYIDS.LIST TYPE="Number">
       <OLDAUDITENTRYIDS>-1</OLDAUDITENTRYIDS>
      </OLDAUDITENTRYIDS.LIST>
      <DATE>{{ date('d M Y',strtotime($order->tanggal)) }}</DATE>
      <GUID>5b84a82f-0d6d-484f-af88-c4014bab7de4-00002fe6</GUID>
      <PRICELEVEL>Price List</PRICELEVEL>
      <PARTYNAME>{{ strtoupper($order->order_to) }}</PARTYNAME>
      <VOUCHERTYPENAME>Sales Order</VOUCHERTYPENAME>
      <REFERENCE>{{ $order->no_so }}</REFERENCE>
      <VOUCHERNUMBER>{{ $order->no_so }}</VOUCHERNUMBER>
      <PARTYLEDGERNAME>{{ $order->order_to }}</PARTYLEDGERNAME>
      <BASICBASEPARTYNAME> {{ $order->order_to }}</BASICBASEPARTYNAME>
      <CSTFORMISSUETYPE/>
      <CSTFORMRECVTYPE/>
      <FBTPAYMENTTYPE>Default</FBTPAYMENTTYPE>
      <PERSISTEDVIEW>Invoice Voucher View</PERSISTEDVIEW>
      <BASICBUYERNAME>{{ $order->order_to }}</BASICBUYERNAME>
      <BASICFINALDESTINATION>Ecomm</BASICFINALDESTINATION>
      <BASICORDERREF>Podl18110021</BASICORDERREF>
      <BASICDUEDATEOFPYMT>{{ $order->payment_terms  }}</BASICDUEDATEOFPYMT>
      <VCHGSTCLASS/>
      <COSTCENTRENAME>Andrian Harli</COSTCENTRENAME>
      <ENTEREDBY>{{ $order->orderUser }}</ENTEREDBY>
      <DIFFACTUALQTY>Yes</DIFFACTUALQTY>
      <ISMSTFROMSYNC>No</ISMSTFROMSYNC>
      <ASORIGINAL>No</ASORIGINAL>
      <AUDITED>No</AUDITED>
      <FORJOBCOSTING>No</FORJOBCOSTING>
      <ISOPTIONAL>No</ISOPTIONAL>
      <EFFECTIVEDATE>20181126</EFFECTIVEDATE>
      <USEFOREXCISE>No</USEFOREXCISE>
      <ISFORJOBWORKIN>No</ISFORJOBWORKIN>
      <ALLOWCONSUMPTION>No</ALLOWCONSUMPTION>
      <USEFORINTEREST>No</USEFORINTEREST>
      <USEFORGAINLOSS>No</USEFORGAINLOSS>
      <USEFORGODOWNTRANSFER>No</USEFORGODOWNTRANSFER>
      <USEFORCOMPOUND>No</USEFORCOMPOUND>
      <USEFORSERVICETAX>No</USEFORSERVICETAX>
      <ISEXCISEVOUCHER>No</ISEXCISEVOUCHER>
      <EXCISETAXOVERRIDE>No</EXCISETAXOVERRIDE>
      <USEFORTAXUNITTRANSFER>No</USEFORTAXUNITTRANSFER>
      <EXCISEOPENING>No</EXCISEOPENING>
      <USEFORFINALPRODUCTION>No</USEFORFINALPRODUCTION>
      <ISTDSOVERRIDDEN>No</ISTDSOVERRIDDEN>
      <ISTCSOVERRIDDEN>No</ISTCSOVERRIDDEN>
      <ISTDSTCSCASHVCH>No</ISTDSTCSCASHVCH>
      <INCLUDEADVPYMTVCH>No</INCLUDEADVPYMTVCH>
      <ISSUBWORKSCONTRACT>No</ISSUBWORKSCONTRACT>
      <ISVATOVERRIDDEN>No</ISVATOVERRIDDEN>
      <IGNOREORIGVCHDATE>No</IGNOREORIGVCHDATE>
      <ISSERVICETAXOVERRIDDEN>No</ISSERVICETAXOVERRIDDEN>
      <ISISDVOUCHER>No</ISISDVOUCHER>
      <ISEXCISEOVERRIDDEN>No</ISEXCISEOVERRIDDEN>
      <ISEXCISESUPPLYVCH>No</ISEXCISESUPPLYVCH>
      <ISVATPRINCIPALACCOUNT>No</ISVATPRINCIPALACCOUNT>
      <ISSHIPPINGWITHINSTATE>No</ISSHIPPINGWITHINSTATE>
      <ISCANCELLED>No</ISCANCELLED>
      <HASCASHFLOW>No</HASCASHFLOW>
      <ISPOSTDATED>No</ISPOSTDATED>
      <USETRACKINGNUMBER>No</USETRACKINGNUMBER>
      <ISINVOICE>No</ISINVOICE>
      <MFGJOURNAL>No</MFGJOURNAL>
      <HASDISCOUNTS>Yes</HASDISCOUNTS>
      <ASPAYSLIP>No</ASPAYSLIP>
      <ISCOSTCENTRE>Yes</ISCOSTCENTRE>
      <ISSTXNONREALIZEDVCH>No</ISSTXNONREALIZEDVCH>
      <ISEXCISEMANUFACTURERON>No</ISEXCISEMANUFACTURERON>
      <ISBLANKCHEQUE>No</ISBLANKCHEQUE>
      <ISVOID>No</ISVOID>
      <ISONHOLD>No</ISONHOLD>
      <ORDERLINESTATUS>No</ORDERLINESTATUS>
      <VATISAGNSTCANCSALES>No</VATISAGNSTCANCSALES>
      <VATISPURCEXEMPTED>No</VATISPURCEXEMPTED>
      <ISVATRESTAXINVOICE>No</ISVATRESTAXINVOICE>
      <VATISASSESABLECALCVCH>No</VATISASSESABLECALCVCH>
      <ISVATDUTYPAID>Yes</ISVATDUTYPAID>
      <ISDELIVERYSAMEASCONSIGNEE>No</ISDELIVERYSAMEASCONSIGNEE>
      <ISDISPATCHSAMEASCONSIGNOR>No</ISDISPATCHSAMEASCONSIGNOR>
      <ISDELETED>No</ISDELETED>
      <CHANGEVCHMODE>No</CHANGEVCHMODE>
      <ALTERID> 20966</ALTERID>
      <MASTERID> 12262</MASTERID>
      <VOUCHERKEY>186526134698152</VOUCHERKEY>
      <EXCLUDEDTAXATIONS.LIST>      </EXCLUDEDTAXATIONS.LIST>
      <OLDAUDITENTRIES.LIST>      </OLDAUDITENTRIES.LIST>
      <ACCOUNTAUDITENTRIES.LIST>      </ACCOUNTAUDITENTRIES.LIST>
      <AUDITENTRIES.LIST>      </AUDITENTRIES.LIST>
      <DUTYHEADDETAILS.LIST>      </DUTYHEADDETAILS.LIST>
      <SUPPLEMENTARYDUTYHEADDETAILS.LIST>      </SUPPLEMENTARYDUTYHEADDETAILS.LIST>
      <INVOICEDELNOTES.LIST>      </INVOICEDELNOTES.LIST>
      <INVOICEORDERLIST.LIST>      </INVOICEORDERLIST.LIST>
      <INVOICEINDENTLIST.LIST>      </INVOICEINDENTLIST.LIST>
      <ATTENDANCEENTRIES.LIST>      </ATTENDANCEENTRIES.LIST>
      <ORIGINVOICEDETAILS.LIST>      </ORIGINVOICEDETAILS.LIST>
      <INVOICEEXPORTLIST.LIST>      </INVOICEEXPORTLIST.LIST>
      <LEDGERENTRIES.LIST>
       <OLDAUDITENTRYIDS.LIST TYPE="Number">
        <OLDAUDITENTRYIDS>-1</OLDAUDITENTRYIDS>
       </OLDAUDITENTRYIDS.LIST>
       <LEDGERNAME>{{ $order->order_to }}</LEDGERNAME>
       <GSTCLASS/>
       <ISDEEMEDPOSITIVE>Yes</ISDEEMEDPOSITIVE>
       <LEDGERFROMITEM>No</LEDGERFROMITEM>
       <REMOVEZEROENTRIES>No</REMOVEZEROENTRIES>
       <ISPARTYLEDGER>Yes</ISPARTYLEDGER>
       <ISLASTDEEMEDPOSITIVE>Yes</ISLASTDEEMEDPOSITIVE>
       <AMOUNT>-{{ $wholesale->jumlah_total }}</AMOUNT>
       <SERVICETAXDETAILS.LIST>       </SERVICETAXDETAILS.LIST>
       <BANKALLOCATIONS.LIST>       </BANKALLOCATIONS.LIST>
       <BILLALLOCATIONS.LIST>       </BILLALLOCATIONS.LIST>
       <INTERESTCOLLECTION.LIST>       </INTERESTCOLLECTION.LIST>
       <OLDAUDITENTRIES.LIST>       </OLDAUDITENTRIES.LIST>
       <ACCOUNTAUDITENTRIES.LIST>       </ACCOUNTAUDITENTRIES.LIST>
       <AUDITENTRIES.LIST>       </AUDITENTRIES.LIST>
       <INPUTCRALLOCS.LIST>       </INPUTCRALLOCS.LIST>
       <DUTYHEADDETAILS.LIST>       </DUTYHEADDETAILS.LIST>
       <EXCISEDUTYHEADDETAILS.LIST>       </EXCISEDUTYHEADDETAILS.LIST>
       <SUMMARYALLOCS.LIST>       </SUMMARYALLOCS.LIST>
       <STPYMTDETAILS.LIST>       </STPYMTDETAILS.LIST>
       <EXCISEPAYMENTALLOCATIONS.LIST>       </EXCISEPAYMENTALLOCATIONS.LIST>
       <TAXBILLALLOCATIONS.LIST>       </TAXBILLALLOCATIONS.LIST>
       <TAXOBJECTALLOCATIONS.LIST>       </TAXOBJECTALLOCATIONS.LIST>
       <TDSEXPENSEALLOCATIONS.LIST>       </TDSEXPENSEALLOCATIONS.LIST>
       <VATSTATUTORYDETAILS.LIST>       </VATSTATUTORYDETAILS.LIST>
       <COSTTRACKALLOCATIONS.LIST>       </COSTTRACKALLOCATIONS.LIST>
       <REFVOUCHERDETAILS.LIST>       </REFVOUCHERDETAILS.LIST>
       <INVOICEWISEDETAILS.LIST>       </INVOICEWISEDETAILS.LIST>
       <VATITCDETAILS.LIST>       </VATITCDETAILS.LIST>
      </LEDGERENTRIES.LIST>
      <LEDGERENTRIES.LIST>
       <OLDAUDITENTRYIDS.LIST TYPE="Number">
        <OLDAUDITENTRYIDS>-1</OLDAUDITENTRYIDS>
       </OLDAUDITENTRYIDS.LIST>
       <BASICRATEOFINVOICETAX.LIST TYPE="Number">
        <BASICRATEOFINVOICETAX> 10</BASICRATEOFINVOICETAX>
       </BASICRATEOFINVOICETAX.LIST>
       <ROUNDTYPE/>
       <LEDGERNAME>PPN</LEDGERNAME>
       <GSTCLASS/>
       <ISDEEMEDPOSITIVE>No</ISDEEMEDPOSITIVE>
       <LEDGERFROMITEM>No</LEDGERFROMITEM>
       <REMOVEZEROENTRIES>No</REMOVEZEROENTRIES>
       <ISPARTYLEDGER>No</ISPARTYLEDGER>
       <ISLASTDEEMEDPOSITIVE>No</ISLASTDEEMEDPOSITIVE>
       <AMOUNT>{{ $wholesale->jumlah_total }}</AMOUNT>
       <VATEXPAMOUNT>{{ $wholesale->jumlah_total }}</VATEXPAMOUNT>
       <SERVICETAXDETAILS.LIST>       </SERVICETAXDETAILS.LIST>
       <BANKALLOCATIONS.LIST>       </BANKALLOCATIONS.LIST>
       <BILLALLOCATIONS.LIST>       </BILLALLOCATIONS.LIST>
       <INTERESTCOLLECTION.LIST>       </INTERESTCOLLECTION.LIST>
       <OLDAUDITENTRIES.LIST>       </OLDAUDITENTRIES.LIST>
       <ACCOUNTAUDITENTRIES.LIST>       </ACCOUNTAUDITENTRIES.LIST>
       <AUDITENTRIES.LIST>       </AUDITENTRIES.LIST>
       <INPUTCRALLOCS.LIST>       </INPUTCRALLOCS.LIST>
       <DUTYHEADDETAILS.LIST>       </DUTYHEADDETAILS.LIST>
       <EXCISEDUTYHEADDETAILS.LIST>       </EXCISEDUTYHEADDETAILS.LIST>
       <SUMMARYALLOCS.LIST>       </SUMMARYALLOCS.LIST>
       <STPYMTDETAILS.LIST>       </STPYMTDETAILS.LIST>
       <EXCISEPAYMENTALLOCATIONS.LIST>       </EXCISEPAYMENTALLOCATIONS.LIST>
       <TAXBILLALLOCATIONS.LIST>       </TAXBILLALLOCATIONS.LIST>
       <TAXOBJECTALLOCATIONS.LIST>       </TAXOBJECTALLOCATIONS.LIST>
       <TDSEXPENSEALLOCATIONS.LIST>       </TDSEXPENSEALLOCATIONS.LIST>
       <VATSTATUTORYDETAILS.LIST>       </VATSTATUTORYDETAILS.LIST>
       <COSTTRACKALLOCATIONS.LIST>       </COSTTRACKALLOCATIONS.LIST>
       <REFVOUCHERDETAILS.LIST>       </REFVOUCHERDETAILS.LIST>
       <INVOICEWISEDETAILS.LIST>       </INVOICEWISEDETAILS.LIST>
       <VATITCDETAILS.LIST>       </VATITCDETAILS.LIST>
      </LEDGERENTRIES.LIST>

      <!-- // BARANG -->
      @foreach($orderWholesale as $wholesale)

	      <ALLINVENTORYENTRIES.LIST>
	       <STOCKITEMNAME>{{ strtoupper($wholesale->judul) }}</STOCKITEMNAME>
	       <ISDEEMEDPOSITIVE>No</ISDEEMEDPOSITIVE>
	       <ISLASTDEEMEDPOSITIVE>No</ISLASTDEEMEDPOSITIVE>
	       <ISAUTONEGATE>No</ISAUTONEGATE>
	       <ISCUSTOMSCLEARANCE>No</ISCUSTOMSCLEARANCE>
	       <ISTRACKCOMPONENT>No</ISTRACKCOMPONENT>
	       <ISTRACKPRODUCTION>No</ISTRACKPRODUCTION>
	       <ISPRIMARYITEM>No</ISPRIMARYITEM>
	       <ISSCRAP>No</ISSCRAP>
	       <RATE>{{ $wholesale->harga_satuan }}</RATE>
	       <DISCOUNT> {{ $wholesale->diskon_1 }}</DISCOUNT>
	       <AMOUNT>{{ $wholesale->jumlah_total }}</AMOUNT>
	       <ACTUALQTY> 3 PCS</ACTUALQTY>
	       <BILLEDQTY> 3 PCS</BILLEDQTY>
	       <BATCHALLOCATIONS.LIST>
	        <GODOWNNAME>JURUMUDI</GODOWNNAME>
	        <BATCHNAME>Primary Batch</BATCHNAME>
	        <DESTINATIONGODOWNNAME>JURUMUDI</DESTINATIONGODOWNNAME>
	        <INDENTNO/>
	        <ORDERNO>{{ $order->no_so }}</ORDERNO>
	        <TRACKINGNUMBER/>
	        <DYNAMICCSTISCLEARED>No</DYNAMICCSTISCLEARED>
	        <AMOUNT>{{ $wholesale->jumlah_total }}</AMOUNT>
	        <ACTUALQTY> 3 PCS</ACTUALQTY>
	        <BILLEDQTY> 3 PCS</BILLEDQTY>
	        <ORDERDUEDATE JD="43429" P="26-Nov-2018">{{ date('d M Y',strtotime($order->tanggal)) }}</ORDERDUEDATE>
	        <ADDITIONALDETAILS.LIST>        </ADDITIONALDETAILS.LIST>
	        <VOUCHERCOMPONENTLIST.LIST>        </VOUCHERCOMPONENTLIST.LIST>
	       </BATCHALLOCATIONS.LIST>
	       <ACCOUNTINGALLOCATIONS.LIST>
	        <OLDAUDITENTRYIDS.LIST TYPE="Number">
	         <OLDAUDITENTRYIDS>-1</OLDAUDITENTRYIDS>
	        </OLDAUDITENTRYIDS.LIST>
	        <LEDGERNAME>PENJUALAN ALAT MUSIK PPN</LEDGERNAME>
	        <GSTCLASS/>
	        <ISDEEMEDPOSITIVE>No</ISDEEMEDPOSITIVE>
	        <LEDGERFROMITEM>No</LEDGERFROMITEM>
	        <REMOVEZEROENTRIES>No</REMOVEZEROENTRIES>
	        <ISPARTYLEDGER>No</ISPARTYLEDGER>
	        <ISLASTDEEMEDPOSITIVE>No</ISLASTDEEMEDPOSITIVE>
	        <AMOUNT>{{ $wholesale->jumlah_total }}</AMOUNT>
	        <SERVICETAXDETAILS.LIST>        </SERVICETAXDETAILS.LIST>
	        <CATEGORYALLOCATIONS.LIST>
	         <CATEGORY>Salesman</CATEGORY>
	         <ISDEEMEDPOSITIVE>No</ISDEEMEDPOSITIVE>
	         <COSTCENTREALLOCATIONS.LIST>
	          <NAME>Andrian Harli</NAME>
	          <AMOUNT>{{ $wholesale->jumla_total }}</AMOUNT>
	         </COSTCENTREALLOCATIONS.LIST>
	        </CATEGORYALLOCATIONS.LIST>
	        <BANKALLOCATIONS.LIST>        </BANKALLOCATIONS.LIST>
	        <BILLALLOCATIONS.LIST>        </BILLALLOCATIONS.LIST>
	        <INTERESTCOLLECTION.LIST>        </INTERESTCOLLECTION.LIST>
	        <OLDAUDITENTRIES.LIST>        </OLDAUDITENTRIES.LIST>
	        <ACCOUNTAUDITENTRIES.LIST>        </ACCOUNTAUDITENTRIES.LIST>
	        <AUDITENTRIES.LIST>        </AUDITENTRIES.LIST>
	        <INPUTCRALLOCS.LIST>        </INPUTCRALLOCS.LIST>
	        <DUTYHEADDETAILS.LIST>        </DUTYHEADDETAILS.LIST>
	        <EXCISEDUTYHEADDETAILS.LIST>        </EXCISEDUTYHEADDETAILS.LIST>
	        <SUMMARYALLOCS.LIST>        </SUMMARYALLOCS.LIST>
	        <STPYMTDETAILS.LIST>        </STPYMTDETAILS.LIST>
	        <EXCISEPAYMENTALLOCATIONS.LIST>        </EXCISEPAYMENTALLOCATIONS.LIST>
	        <TAXBILLALLOCATIONS.LIST>        </TAXBILLALLOCATIONS.LIST>
	        <TAXOBJECTALLOCATIONS.LIST>        </TAXOBJECTALLOCATIONS.LIST>
	        <TDSEXPENSEALLOCATIONS.LIST>        </TDSEXPENSEALLOCATIONS.LIST>
	        <VATSTATUTORYDETAILS.LIST>        </VATSTATUTORYDETAILS.LIST>
	        <COSTTRACKALLOCATIONS.LIST>        </COSTTRACKALLOCATIONS.LIST>
	        <REFVOUCHERDETAILS.LIST>        </REFVOUCHERDETAILS.LIST>
	        <INVOICEWISEDETAILS.LIST>        </INVOICEWISEDETAILS.LIST>
	        <VATITCDETAILS.LIST>        </VATITCDETAILS.LIST>
	       </ACCOUNTINGALLOCATIONS.LIST>
	       <DUTYHEADDETAILS.LIST>       </DUTYHEADDETAILS.LIST>
	       <SUPPLEMENTARYDUTYHEADDETAILS.LIST>       </SUPPLEMENTARYDUTYHEADDETAILS.LIST>
	       <TAXOBJECTALLOCATIONS.LIST>       </TAXOBJECTALLOCATIONS.LIST>
	       <REFVOUCHERDETAILS.LIST>       </REFVOUCHERDETAILS.LIST>
	       <EXCISEALLOCATIONS.LIST>       </EXCISEALLOCATIONS.LIST>
	       <EXPENSEALLOCATIONS.LIST>       </EXPENSEALLOCATIONS.LIST>
	      </ALLINVENTORYENTRIES.LIST>
	    @endforeach
      <!-- // -->

      <PAYROLLMODEOFPAYMENT.LIST>      </PAYROLLMODEOFPAYMENT.LIST>
      <ATTDRECORDS.LIST>      </ATTDRECORDS.LIST>
     </VOUCHER>
    </TALLYMESSAGE>
    <TALLYMESSAGE xmlns:UDF="TallyUDF">
     <COMPANY>
      <REMOTECMPINFO.LIST MERGE="Yes">
       <NAME>5b84a82f-0d6d-484f-af88-c4014bab7de4</NAME>
       <REMOTECMPNAME>PT. {{ $orderPT }}</REMOTECMPNAME>
       <REMOTECMPSTATE>Indonesia</REMOTECMPSTATE>
      </REMOTECMPINFO.LIST>
     </COMPANY>
    </TALLYMESSAGE>
    <TALLYMESSAGE xmlns:UDF="TallyUDF">
     <COMPANY>
      <REMOTECMPINFO.LIST MERGE="Yes">
       <NAME>5b84a82f-0d6d-484f-af88-c4014bab7de4</NAME>
       <REMOTECMPNAME>PT. {{ $orderPT }}</REMOTECMPNAME>
       <REMOTECMPSTATE>Indonesia</REMOTECMPSTATE>
      </REMOTECMPINFO.LIST>
     </COMPANY>
    </TALLYMESSAGE>
   </REQUESTDATA>
  </IMPORTDATA>
 </BODY>
</ENVELOPE>
