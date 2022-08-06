@extends('layouts.index')
@section('container')
 <div class="row" style="margin-top: 50px">
  <div class="col-lg-6">
   <div class="card">
       <div class="card-header">
           <strong class="card-title">Master Barang</strong>
       </div>
       <div class="card-body">
           <div id="pay-invoice">
               <div class="card-body">
                   <form action="#" method="post" novalidate="novalidate" >
                       <div class="form-group">
                           <label for="cc-payment" class="control-label mb-1">Nama Barang</label>
                           <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                       </div>
                       <div class="form-group has-success">
                           <label for="cc-name" class="control-label mb-1">Name on card</label>
                           <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                           <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                       </div>
                       <div class="form-group">
                           <label for="cc-number" class="control-label mb-1">Card number</label>
                           <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                           <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                       </div>
                       <div class="row">
                           <div class="col-6">
                               <div class="form-group">
                                   <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                   <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY">
                                   <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                               </div>
                           </div>
                           <div class="col-6">
                               <label for="x_card_code" class="control-label mb-1">Security code</label>
                               <div class="input-group">
                                   <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                   <div class="input-group-addon">
                                       <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                       data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                       data-trigger="hover"></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="d-grid gap-2" style="margin-top:15px">
                        <button class="btn btn-info" type="button">Tambah</button>
                       </div>
                   </form>
               </div>
           </div>
  
       </div>
   </div> <!-- .card -->
  
  </div><!--/.col-->  
  <div class="col-xl-6 col-md-12">
   <div class="card">
       <div class="card-header">
        <strong class="card-title">List Item</strong>
       </div>
       <div class="card-body">
           <div class="table-stats ">
            <table id="myTable" class="table table-striped table-bordered display">
               <thead>
                   <tr>
                       <th>Name</th>
                       <th>Position</th>
                       <th>Office</th>
                       <th>Salary</th>
                   </tr>
               </thead>
             <tbody>
                 <tr>
                     <td>Tiger Nixon</td>
                     <td>System Architect</td>
                     <td>Edinburgh</td>
                     <td>$320,800</td>
                 </tr>
                 <tr>
                     <td>Garrett Winters</td>
                     <td>Accountant</td>
                     <td>Tokyo</td>
                     <td>$170,750</td>
                 </tr>
                 <tr>
                     <td>Ashton Cox</td>
                     <td>Junior Technical Author</td>
                     <td>San Francisco</td>
                     <td>$86,000</td>
                 </tr>
                 <tr>
                     <td>Cedric Kelly</td>
                     <td>Senior Javascript Developer</td>
                     <td>Edinburgh</td>
                     <td>$433,060</td>
                 </tr>
                 <tr>
                     <td>Airi Satou</td>
                     <td>Accountant</td>
                     <td>Tokyo</td>
                     <td>$162,700</td>
                 </tr>
                 <tr>
                     <td>Brielle Williamson</td>
                     <td>Integration Specialist</td>
                     <td>New York</td>
                     <td>$372,000</td>
                 </tr>
                 <tr>
                     <td>Herrod Chandler</td>
                     <td>Sales Assistant</td>
                     <td>San Francisco</td>
                     <td>$137,500</td>
                 </tr>
                 <tr>
                     <td>Rhona Davidson</td>
                     <td>Integration Specialist</td>
                     <td>Tokyo</td>
                     <td>$327,900</td>
                 </tr>
                 <tr>
                     <td>Colleen Hurst</td>
                     <td>Javascript Developer</td>
                     <td>San Francisco</td>
                     <td>$205,500</td>
                 </tr>
                 <tr>
                     <td>Sonya Frost</td>
                     <td>Software Engineer</td>
                     <td>Edinburgh</td>
                     <td>$103,600</td>
                 </tr>
                 <tr>
                     <td>Jena Gaines</td>
                     <td>Office Manager</td>
                     <td>London</td>
                     <td>$90,560</td>
                 </tr>
                 <tr>
                     <td>Quinn Flynn</td>
                     <td>Support Lead</td>
                     <td>Edinburgh</td>
                     <td>$342,000</td>
                 </tr>
                 <tr>
                     <td>Charde Marshall</td>
                     <td>Regional Director</td>
                     <td>San Francisco</td>
                     <td>$470,600</td>
                 </tr>
                 <tr>
                     <td>Haley Kennedy</td>
                     <td>Senior Marketing Designer</td>
                     <td>London</td>
                     <td>$313,500</td>
                 </tr>
                 <tr>
                     <td>Tatyana Fitzpatrick</td>
                     <td>Regional Director</td>
                     <td>London</td>
                     <td>$385,750</td>
                 </tr>
                 <tr>
                     <td>Michael Silva</td>
                     <td>Marketing Designer</td>
                     <td>London</td>
                     <td>$198,500</td>
                 </tr>
                 <tr>
                     <td>Paul Byrd</td>
                     <td>Chief Financial Officer (CFO)</td>
                     <td>New York</td>
                     <td>$725,000</td>
                 </tr>
                 <tr>
                     <td>Gloria Little</td>
                     <td>Systems Administrator</td>
                     <td>New York</td>
                     <td>$237,500</td>
                 </tr>
                 <tr>
                     <td>Bradley Greer</td>
                     <td>Software Engineer</td>
                     <td>London</td>
                     <td>$132,000</td>
                 </tr>
                 <tr>
                     <td>Dai Rios</td>
                     <td>Personnel Lead</td>
                     <td>Edinburgh</td>
                     <td>$217,500</td>
                 </tr>
                 <tr>
                     <td>Jenette Caldwell</td>
                     <td>Development Lead</td>
                     <td>New York</td>
                     <td>$345,000</td>
                 </tr>
                 <tr>
                     <td>Yuri Berry</td>
                     <td>Chief Marketing Officer (CMO)</td>
                     <td>New York</td>
                     <td>$675,000</td>
                 </tr>
                 <tr>
                     <td>Caesar Vance</td>
                     <td>Pre-Sales Support</td>
                     <td>New York</td>
                     <td>$106,450</td>
                 </tr>
                 <tr>
                     <td>Doris Wilder</td>
                     <td>Sales Assistant</td>
                     <td>Sidney</td>
                     <td>$85,600</td>
                 </tr>
                 <tr>
                     <td>Angelica Ramos</td>
                     <td>Chief Executive Officer (CEO)</td>
                     <td>London</td>
                     <td>$1,200,000</td>
                 </tr>
                 <tr>
                     <td>Gavin Joyce</td>
                     <td>Developer</td>
                     <td>Edinburgh</td>
                     <td>$92,575</td>
                 </tr>
                 <tr>
                     <td>Jennifer Chang</td>
                     <td>Regional Director</td>
                     <td>Singapore</td>
                     <td>$357,650</td>
                 </tr>
                 <tr>
                     <td>Brenden Wagner</td>
                     <td>Software Engineer</td>
                     <td>San Francisco</td>
                     <td>$206,850</td>
                 </tr>
                 <tr>
                     <td>Fiona Green</td>
                     <td>Chief Operating Officer (COO)</td>
                     <td>San Francisco</td>
                     <td>$850,000</td>
                 </tr>
                 <tr>
                     <td>Shou Itou</td>
                     <td>Regional Marketing</td>
                     <td>Tokyo</td>
                     <td>$163,000</td>
                 </tr>
                 <tr>
                     <td>Michelle House</td>
                     <td>Integration Specialist</td>
                     <td>Sidney</td>
                     <td>$95,400</td>
                 </tr>
                 <tr>
                     <td>Suki Burks</td>
                     <td>Developer</td>
                     <td>London</td>
                     <td>$114,500</td>
                 </tr>
                 <tr>
                     <td>Prescott Bartlett</td>
                     <td>Technical Author</td>
                     <td>London</td>
                     <td>$145,000</td>
                 </tr>
                 <tr>
                     <td>Gavin Cortez</td>
                     <td>Team Leader</td>
                     <td>San Francisco</td>
                     <td>$235,500</td>
                 </tr>
                 <tr>
                     <td>Martena Mccray</td>
                     <td>Post-Sales support</td>
                     <td>Edinburgh</td>
                     <td>$324,050</td>
                 </tr>
                 <tr>
                     <td>Unity Butler</td>
                     <td>Marketing Designer</td>
                     <td>San Francisco</td>
                     <td>$85,675</td>
                 </tr>
                 <tr>
                     <td>Howard Hatfield</td>
                     <td>Office Manager</td>
                     <td>San Francisco</td>
                     <td>$164,500</td>
                 </tr>
                 <tr>
                     <td>Hope Fuentes</td>
                     <td>Secretary</td>
                     <td>San Francisco</td>
                     <td>$109,850</td>
                 </tr>
                 <tr>
                     <td>Vivian Harrell</td>
                     <td>Financial Controller</td>
                     <td>San Francisco</td>
                     <td>$452,500</td>
                 </tr>
                 <tr>
                     <td>Timothy Mooney</td>
                     <td>Office Manager</td>
                     <td>London</td>
                     <td>$136,200</td>
                 </tr>
                 <tr>
                     <td>Jackson Bradshaw</td>
                     <td>Director</td>
                     <td>New York</td>
                     <td>$645,750</td>
                 </tr>
                 <tr>
                     <td>Olivia Liang</td>
                     <td>Support Engineer</td>
                     <td>Singapore</td>
                     <td>$234,500</td>
                 </tr>
                 <tr>
                     <td>Bruno Nash</td>
                     <td>Software Engineer</td>
                     <td>London</td>
                     <td>$163,500</td>
                 </tr>
                 <tr>
                     <td>Sakura Yamamoto</td>
                     <td>Support Engineer</td>
                     <td>Tokyo</td>
                     <td>$139,575</td>
                 </tr>
                 <tr>
                     <td>Thor Walton</td>
                     <td>Developer</td>
                     <td>New York</td>
                     <td>$98,540</td>
                 </tr>
                 <tr>
                     <td>Finn Camacho</td>
                     <td>Support Engineer</td>
                     <td>San Francisco</td>
                     <td>$87,500</td>
                 </tr>
                 <tr>
                     <td>Serge Baldwin</td>
                     <td>Data Coordinator</td>
                     <td>Singapore</td>
                     <td>$138,575</td>
                 </tr>
                 <tr>
                     <td>Zenaida Frank</td>
                     <td>Software Engineer</td>
                     <td>New York</td>
                     <td>$125,250</td>
                 </tr>
                 <tr>
                     <td>Zorita Serrano</td>
                     <td>Software Engineer</td>
                     <td>San Francisco</td>
                     <td>$115,000</td>
                 </tr>
                 <tr>
                     <td>Jennifer Acosta</td>
                     <td>Junior Javascript Developer</td>
                     <td>Edinburgh</td>
                     <td>$75,650</td>
                 </tr>
                 <tr>
                     <td>Cara Stevens</td>
                     <td>Sales Assistant</td>
                     <td>New York</td>
                     <td>$145,600</td>
                 </tr>
                 <tr>
                     <td>Hermione Butler</td>
                     <td>Regional Director</td>
                     <td>London</td>
                     <td>$356,250</td>
                 </tr>
                 <tr>
                     <td>Lael Greer</td>
                     <td>Systems Administrator</td>
                     <td>London</td>
                     <td>$103,500</td>
                 </tr>
                 <tr>
                     <td>Jonas Alexander</td>
                     <td>Developer</td>
                     <td>San Francisco</td>
                     <td>$86,500</td>
                 </tr>
                 <tr>
                     <td>Shad Decker</td>
                     <td>Regional Director</td>
                     <td>Edinburgh</td>
                     <td>$183,000</td>
                 </tr>
                 <tr>
                     <td>Michael Bruce</td>
                     <td>Javascript Developer</td>
                     <td>Singapore</td>
                     <td>$183,000</td>
                 </tr>
                 <tr>
                     <td>Donna Snider</td>
                     <td>Customer Support</td>
                     <td>New York</td>
                     <td>$112,000</td>
                 </tr>
             </tbody>
            </table>
           </div> <!-- /.table-stats -->
       </div>
   </div> <!-- /.card -->
  </div>
 </div>

@endsection