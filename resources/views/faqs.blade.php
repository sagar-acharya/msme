@extends('layouts.master')
@section('content')
<section class="section" id="contact" style="padding: 0.1rem 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="padding: 20px">
                <h1 style="text-align: center;margin-bottom:40px;">Frequently Asked Questions</h1>
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="faq-title" >1) What is Udyam (MSME) Registration?</span>
                          </button>
                        </h5>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <span class="faq-answer-title">The Ministry of Micro, Small and Medium Enterprises (MSMEs) vide its publication of notification in Gazette of India dated 26th June, 2020 has specified the new form and procedure for filing the memorandum to be known as ‘UDYAM REGISTRATION’ with effect from 1st day of July, 2020.</span>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="faq-title">2) What is the difference between SSI, MSME, Udyog Aadhaar and Udyam Registration?</span>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <span class="faq-answer-title">Different names for same certificates. With effect from 1st July 2020, SSI, MSME and Udyog Aadhaar Registration have been discontinued and replaced by Udyam Registration. Eventually the sole purpose of this registration is to provide benefits to MSMEs in India. All existing MSME/ Udyog Aadhaar Registered enterprises are required to re-enrol for Udyam Registrations using their existing registration details.</span>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="faq-title">3) When Udyam Registration Certificate is received?</span>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <span class="faq-answer-title">An Udyam Registration Certificate is received by the applicant once the entire online registration process is complete. This Certificate is valid for lifetime. This certificate will have a dynamic QR Code from which the web page on the government Portal and details about the enterprise can be accessed.</span>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <span class="faq-title">4) Who is Eligible for Udyam Registration?</span>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                          <div class="card-body">
                              <span class="faq-answer-title">Any person who intends to establish a micro, small, medium enterprise may file online udyam registration.</span>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          <span class="faq-title">5) Is Aadhar number is mandatory for Udyam Registration?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">Yes, Aadhar no of authorised signatory is mandatory for Udyam Registration.</span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          <span class="faq-title">6) What are the Documents Required for Udyam Registration?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">The Online Udyam Registration application process is based on self-declaration, and there is no further requirement to upload any documents, certificates, papers, or proofs.
                            <br/>However, user needs to provide their 12-digit Aadhaar No, Pan Card and Bank Account details of Business for the registration process. There is no need for physical documents or any soft copies. The overall process just needs details about your business.
                            </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          <span class="faq-title">7) What is the process for getting Udyam registration For Existing MSME registered users?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">
                              <ul>
                                  <li>Upon receiving all your information our executives will call you to confirm your information. You will be further requested to provide OTPs sent on the Mobile number linked to your Aadhaar. All existing users registered under EM–Part-II or UAM shall register again on the Udyam Registration portal on or after the 1st day of July, 2020.</li>
                                  <li>All users registered till 30th June, 2020, shall be reclassified in accordance with this notification.</li>
                                  <li>The existing users registered prior to 30th June,2020, shall continue to be valid only for a period up to the 31stday of March, 2021.</li>
                                  <li>An user registered with any other organisation under the Ministry of Micro, Small and Medium Enterprises shall register itself under Udyam Registration.</li>
                              </ul>
                            </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                          <span class="faq-title" style="text-align: left;">8) What is the process for getting Udyam registration for users who do not have MSME registration?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">
                            Upon receiving all your information our executives will call you to confirm your information. You will be further requested to provide OTPs sent on the Mobile number linked to your Aadhaar. The Following simple 3 step procedure is to be followed :
                              <ul>
                                  <li>1. An MSME needs to apply for online Udyam Registration in Udyam Registration Portal.</li>
                                  <li>2. On successful submission of application, the enterprise will be assigned ‘Udyam Registration Number’ (i.e., permanent identity number).</li>
                                  <li>3. On completion of the registration process, the enterprise shall be issued a ‘Udyam Registration Certificate’.</li>
                              </ul>
                            </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingNine">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                          <span class="faq-title" style="text-align: left;">9) Will I receive a Physical/Hard Copy of the Certificate?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">
                            The online certificate sent to you on your Email is valid everywhere.
                            </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingTen">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                          <span class="faq-title" style="text-align: left;">10) Is there any chances of getting Udyam Registration application Rejected?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">
                            No, The applications do not get Rejected. The information you provide is considered as true to your knowledge and the same is recorded on your Udyog Aadhar Registration Certificate.
                           </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingEleven">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                          <span class="faq-title" style="text-align: left;">11) What is Aadhaar validation? Will it affect my application?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">
                            You need to make sure that your Aadhaar card is validated. If not, you will need to get the same validated from your nearest UIDAI (Aadhaar) centre. We are not responsible if your Aadhaar card is not validated and results in your Udyog Aadhaar not being generated.
                           </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingTwelve">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                          <span class="faq-title" style="text-align: left;">12) Is Bank Account compulsory for Udyam/Msme Application?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">
                            If you do not have a bank account for your Establishment, you may enter the personal bank account details of the Proprietor or any of the Partner/ Director of the Firm/ Company. These details can be changed later in the certificate once the bank account is opened using this Udyog Aadhaar/ MSME Registration Certificate. However, it is recommended to put current account details and not saving account details.
                           </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingThirteen">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                          <span class="faq-title" style="text-align: left;">13) What is Government e-Market(GeM)?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">
                            Government e-Market(GeM) :The Government E-Marketplace commonly known as GeM was initiated with a similar premise. The marketplace helps sellers get good prices for their goods and services, and the government departments to get a one-stop-solution to all their needs. This has become the National Procurement Portal of India.
                           </span>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingFourteen">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                          <span class="faq-title" style="text-align: left;">14) What is  TReDS Portal?</span>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion">
                      <div class="card-body">
                          <span class="faq-answer-title">
                            TReDS Portal : TReDS is an electronic platform for facilitating the financing / discounting of trade receivables of Micro, Small and Medium Enterprises (MSMEs) through multiple financiers. These receivables can be due from corporates and other buyers, including Government Departments and Public Sector Undertakings (PSUs).
                           </span>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>

</script>
@endsection
