@extends('layouts.master')
      
    @section ('content')

            <div class="col-12">
              <div class="page-header">
              <h1 class="page-title">
                Customers
              </h1>
            </div>
            @include('layouts.errors')
            <form class="card" method="POST" action="/customers">
                 {{ csrf_field() }}
                <div class="card-header">
                  <h3 class="card-title">Registration</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                        @if ($flash=session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ $flash }}
                            </div>
                        @endif 
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="form-label">Name of Applicant</label>
                        <input type="text" class="form-control" name="name_of_applicant">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Gender</label>
                        <div class="selectgroup w-100">
                          <label class="selectgroup-item">
                            <input type="radio" name="gender" value="m" class="selectgroup-input" >
                            <span class="selectgroup-button">Male</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="radio" name="gender" value="f" class="selectgroup-input">
                            <span class="selectgroup-button">Female</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Account Number</label>
                        <input type="text" class="form-control" name="member_number">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Father`s Name</label>
                        <input type="text" class="form-control" name="fathers_name">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Mother`s Name</label>
                        <input type="text" class="form-control" name="mothers_name" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-label">Spouse`s Name</label>
                        <input type="text" class="form-control" name="spouses_name">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Marital Status</label>
                        <input type="text" class="form-control" name="maritual_status" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <div class="row gutters-xs">
                          <div class="col-5">
                            <select name="" class="form-control custom-select">
                              <option value="">Month</option>
                              <option value="1">January</option>
                              <option value="2">February</option>
                              <option value="3">March</option>
                              <option value="4">April</option>
                              <option value="5">May</option>
                              <option selected="selected" value="6">June</option>
                              <option value="7">July</option>
                              <option value="8">August</option>
                              <option value="9">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                            </select>
                          </div>
                          <div class="col-3">
                            <select name="date_of_birth" class="form-control custom-select">
                              <option value="">Day</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option selected="selected" value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                            </select>
                          </div>
                          <div class="col-4">
                            <select name="" class="form-control custom-select">
                              <option value="">Year</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                              <option value="2010">2010</option>
                              <option value="2009">2009</option>
                              <option value="2008">2008</option>
                              <option value="2007">2007</option>
                              <option value="2006">2006</option>
                              <option value="2005">2005</option>
                              <option value="2004">2004</option>
                              <option value="2003">2003</option>
                              <option value="2002">2002</option>
                              <option value="2001">2001</option>
                              <option value="2000">2000</option>
                              <option value="1999">1999</option>
                              <option value="1998">1998</option>
                              <option value="1997">1997</option>
                              <option value="1996">1996</option>
                              <option value="1995">1995</option>
                              <option value="1994">1994</option>
                              <option value="1993">1993</option>
                              <option value="1992">1992</option>
                              <option value="1991">1991</option>
                              <option value="1990">1990</option>
                              <option selected="selected" value="1989">1989</option>
                              <option value="1988">1988</option>
                              <option value="1987">1987</option>
                              <option value="1986">1986</option>
                              <option value="1985">1985</option>
                              <option value="1984">1984</option>
                              <option value="1983">1983</option>
                              <option value="1982">1982</option>
                              <option value="1981">1981</option>
                              <option value="1980">1980</option>
                              <option value="1979">1979</option>
                              <option value="1978">1978</option>
                              <option value="1977">1977</option>
                              <option value="1976">1976</option>
                              <option value="1975">1975</option>
                              <option value="1974">1974</option>
                              <option value="1973">1973</option>
                              <option value="1972">1972</option>
                              <option value="1971">1971</option>
                              <option value="1970">1970</option>
                              <option value="1969">1969</option>
                              <option value="1968">1968</option>
                              <option value="1967">1967</option>
                              <option value="1966">1966</option>
                              <option value="1965">1965</option>
                              <option value="1964">1964</option>
                              <option value="1963">1963</option>
                              <option value="1962">1962</option>
                              <option value="1961">1961</option>
                              <option value="1960">1960</option>
                              <option value="1959">1959</option>
                              <option value="1958">1958</option>
                              <option value="1957">1957</option>
                              <option value="1956">1956</option>
                              <option value="1955">1955</option>
                              <option value="1954">1954</option>
                              <option value="1953">1953</option>
                              <option value="1952">1952</option>
                              <option value="1951">1951</option>
                              <option value="1950">1950</option>
                              <option value="1949">1949</option>
                              <option value="1948">1948</option>
                              <option value="1947">1947</option>
                              <option value="1946">1946</option>
                              <option value="1945">1945</option>
                              <option value="1944">1944</option>
                              <option value="1943">1943</option>
                              <option value="1942">1942</option>
                              <option value="1941">1941</option>
                              <option value="1940">1940</option>
                              <option value="1939">1939</option>
                              <option value="1938">1938</option>
                              <option value="1937">1937</option>
                              <option value="1936">1936</option>
                              <option value="1935">1935</option>
                              <option value="1934">1934</option>
                              <option value="1933">1933</option>
                              <option value="1932">1932</option>
                              <option value="1931">1931</option>
                              <option value="1930">1930</option>
                              <option value="1929">1929</option>
                              <option value="1928">1928</option>
                              <option value="1927">1927</option>
                              <option value="1926">1926</option>
                              <option value="1925">1925</option>
                              <option value="1924">1924</option>
                              <option value="1923">1923</option>
                              <option value="1922">1922</option>
                              <option value="1921">1921</option>
                              <option value="1920">1920</option>
                              <option value="1919">1919</option>
                              <option value="1918">1918</option>
                              <option value="1917">1917</option>
                              <option value="1916">1916</option>
                              <option value="1915">1915</option>
                              <option value="1914">1914</option>
                              <option value="1913">1913</option>
                              <option value="1912">1912</option>
                              <option value="1911">1911</option>
                              <option value="1910">1910</option>
                              <option value="1909">1909</option>
                              <option value="1908">1908</option>
                              <option value="1907">1907</option>
                              <option value="1906">1906</option>
                              <option value="1905">1905</option>
                              <option value="1904">1904</option>
                              <option value="1903">1903</option>
                              <option value="1902">1902</option>
                              <option value="1901">1901</option>
                              <option value="1900">1900</option>
                              <option value="1899">1899</option>
                              <option value="1898">1898</option>
                              <option value="1897">1897</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Nationality</label>
                        <input type="text" name="nationality" class="form-control" value="Ugandan">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Association Id No.</label>
                        <input type="number" class="form-control" name="association_id_number" required>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Stage of Operation</label>
                        <input type="text" class="form-control" name="stage_of_operation" required>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Number Plate</label>
                        <input type="number" class="form-control" name="motor_cycle_no_plate" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="form-label">Permanent Address</label>
                        <input type="text" class="form-control" id="email1" name="permanent_address" required>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Closest Land Mark</label>
                        <input type="text" class="form-control" id="username1" name="closet_land_mark" required>
                      </div>
                    </div>
                    <div class="col-sm-8 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Mobile No.1</label>
                        <input type="text" class="form-control" id="email1" name="mobile_no1" required>
                      </div>
                    </div>
                    <div class="col-sm-8 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Mobile No.2</label>
                        <input type="text" class="form-control" id="email1" name="mobile_no2">
                      </div>
                    </div>
                    <div class="col-sm-8 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="text" class="form-control" name="">
                      </div>
                    </div>
                   
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-label">Has proof of address been submitted for permanent address</label>
                        <div class="custom-controls-stacked">
                          <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="has_proof_of_address" value="no">
                            <span class="custom-control-label">No</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="has_proof_of_address" value="yes">
                            <span class="custom-control-label">Yes</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-label">Gross Weekly Income</label>
                        <div class="custom-controls-stacked">
                          <label class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name=gross_weekly_income" value="below_50000">
                            <div class="custom-control-label">Below UGX 50,000</div>
                          </label>
                          <label class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name=gross_weekly_income" value="btn_50000_and_100000">
                        <div class="custom-control-label">Btn UGX 50,000-UGX 100,000</div>
                          </label>
                          <label class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name=gross_weekly_income" value="btn_100000_and_150000">
                            <div class="custom-control-label">Btn UGX 100,000-150,000</div>
                          </label>
                          <label class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name=gross_weekly_income" value="above_150000">
                            <div class="custom-control-label">Above UGX 150,0000</div>
                          </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="form-group">
                        <label class="form-label">Any Other Income</label>
                        <textarea rows="4" class="form-control" name="other_sources_of_income" placeholder="Describe other income sources" value=""></textarea>
                        </div>
                    </div>
                     
                  </div>
                </div>
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Save Customer</button>
                </div>
              </form>
            </div>
            		
  @endsection