<!-- BEGIN PAGE -->
<div class="page-content">

    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
							Equipments<small> Accessories</small>
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Equipments </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Accessories </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;
                    <li id="add_btn">
                        <button type="button" class="btn green">Add
                            <i class="icon-plus-sign"></i>
                        </button>
                    </li>

                    <li id="search_btn">
                        <button type="button" class="btn green" data-toggle="tooltip" title="Search">
                            <i class="icon-search m-icon-white"></i>
                        </button>&nbsp;

                    </li>

                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <div id="search_form" class="row-fluid search-forms search-default">
            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" placeholder="Eg; Name of the Accessories..." class="m-wrap" />
                    </div>
                    <button type="button" class="btn green">Search &nbsp;
                        <i class="icon-search m-icon-white"></i>
                    </button>
                </div>
            </form>
        </div>

        <div id="add_form" class="row-fluid search-forms search-default">
            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
						<select name="txtcatid" id="txtcatid" > 
														
							
						</select>
                        <!--input type="text" id="txtcatid" name="txtcatid" placeholder="Eg; Select from dropdown..." class="m-wrap" /-->
                    </div>
                </div>
                <br />
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtacsnm" name="txtacsnm" placeholder="Eg; Name of the Accessories..." class="m-wrap" />
                    </div>
                </div>
                <br />
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtacsremk" name="txtacsremk" placeholder="Eg; Remark Of Accessories..." class="m-wrap" />
                    </div>
                    <button id="addAcs" type="button" class="btn green">Add &nbsp;
                        <i class="icon-plus-sign icon-white"></i>
                    </button>
                </div>
				
                <span id="msgs">

				</span>
            </form>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <!--end tab-pane-->
                <div id="tab_1_2" class="tab-pane active">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-briefcase"></i>Accessories</div>

                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                <thead>
                                    <tr>
                                        <th> Sr.</th>
                                        <th> Access_id </th>
                                        <th> Access_Name </th>
                                        <th> Cat_id </th>
                                        <th> Remark </th>
										<th> Action </th>
                                    </tr>
                                </thead>
                                <tbody id="showAcs">
                                    <!--tr>	
											<td> div</td>
											<td> div</td>
											<td> div</td>
											<td> div</td>
										</tr-->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!--end tab-pane-->

                <div id="tab_1_3" class="tab-pane">

                    <div class="portlet box green">

                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                <thead>
                                    <tr>
                                        <th> Location </th>
                                        <th> Offer By </th>
                                        <th class="hidden-480">Offer Detail </th>
                                        <th class="hidden-480"> Open for </th>
                                        <th class="hidden-480"> Expire on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0
                                        </td>
                                        <td class="hidden-480">Win 95+</td>
                                        <td class="hidden-480">4</td>
                                        <td class="hidden-480">X</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.0
                                        </td>
                                        <td class="hidden-480">Win 95+</td>
                                        <td class="hidden-480">5</td>
                                        <td class="hidden-480">C</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.5
                                        </td>
                                        <td class="hidden-480">Win 95+</td>
                                        <td class="hidden-480">5.5</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 6
                                        </td>
                                        <td class="hidden-480">Win 98+</td>
                                        <td class="hidden-480">6</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                        <td class="hidden-480">Win XP SP2+</td>
                                        <td class="hidden-480">7</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                        <td>AOL browser (AOL desktop)</td>
                                        <td class="hidden-480">Win XP</td>
                                        <td class="hidden-480">6</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Firefox 1.0</td>
                                        <td class="hidden-480">Win 98+ / OSX.2+</td>
                                        <td class="hidden-480">1.7</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Firefox 1.5</td>
                                        <td class="hidden-480">Win 98+ / OSX.2+</td>
                                        <td class="hidden-480">1.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Firefox 2.0</td>
                                        <td class="hidden-480">Win 98+ / OSX.2+</td>
                                        <td class="hidden-480">1.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Firefox 3.0</td>
                                        <td class="hidden-480">Win 2k+ / OSX.3+</td>
                                        <td class="hidden-480">1.9</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Camino 1.0</td>
                                        <td class="hidden-480">OSX.2+</td>
                                        <td class="hidden-480">1.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Camino 1.5</td>
                                        <td class="hidden-480">OSX.3+</td>
                                        <td class="hidden-480">1.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Netscape 7.2</td>
                                        <td class="hidden-480">Win 95+ / Mac OS 8.6-9.2</td>
                                        <td class="hidden-480">1.7</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Netscape Browser 8</td>
                                        <td class="hidden-480">Win 98SE+</td>
                                        <td class="hidden-480">1.7</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Netscape Navigator 9</td>
                                        <td class="hidden-480">Win 98+ / OSX.2+</td>
                                        <td class="hidden-480">1.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.0</td>
                                        <td class="hidden-480">Win 95+ / OSX.1+</td>
                                        <td class="hidden-480">1</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.1</td>
                                        <td class="hidden-480">Win 95+ / OSX.1+</td>
                                        <td class="hidden-480">1.1</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.2</td>
                                        <td class="hidden-480">Win 95+ / OSX.1+</td>
                                        <td class="hidden-480">1.2</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.3</td>
                                        <td class="hidden-480">Win 95+ / OSX.1+</td>
                                        <td class="hidden-480">1.3</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.4</td>
                                        <td class="hidden-480">Win 95+ / OSX.1+</td>
                                        <td class="hidden-480">1.4</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.5</td>
                                        <td class="hidden-480">Win 95+ / OSX.1+</td>
                                        <td class="hidden-480">1.5</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.6</td>
                                        <td class="hidden-480">Win 95+ / OSX.1+</td>
                                        <td class="hidden-480">1.6</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.7</td>
                                        <td class="hidden-480">Win 98+ / OSX.1+</td>
                                        <td class="hidden-480">1.7</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.8</td>
                                        <td class="hidden-480">Win 98+ / OSX.1+</td>
                                        <td class="hidden-480">1.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Seamonkey 1.1</td>
                                        <td class="hidden-480">Win 98+ / OSX.2+</td>
                                        <td class="hidden-480">1.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Epiphany 2.20</td>
                                        <td class="hidden-480">Gnome</td>
                                        <td class="hidden-480">1.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 1.2</td>
                                        <td class="hidden-480">OSX.3</td>
                                        <td class="hidden-480">125.5</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 1.3</td>
                                        <td class="hidden-480">OSX.3</td>
                                        <td class="hidden-480">312.8</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 2.0</td>
                                        <td class="hidden-480">OSX.4+</td>
                                        <td class="hidden-480">419.3</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>Safari 3.0</td>
                                        <td class="hidden-480">OSX.4+</td>
                                        <td class="hidden-480">522.1</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>OmniWeb 5.5</td>
                                        <td class="hidden-480">OSX.4+</td>
                                        <td class="hidden-480">420</td>
                                        <td class="hidden-480">A</td>
                                    </tr>

                                    <tr>
                                        <td>Webkit</td>
                                        <td>iPod Touch / iPhone</td>
                                        <td class="hidden-480">iPod</td>
                                        <td class="hidden-480">420.1</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Webkit</td>
                                        <td>S60</td>
                                        <td class="hidden-480">S60</td>
                                        <td class="hidden-480">413</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 7.0</td>
                                        <td class="hidden-480">Win 95+ / OSX.1+</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 7.5</td>
                                        <td class="hidden-480">Win 95+ / OSX.2+</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 8.0</td>
                                        <td class="hidden-480">Win 95+ / OSX.2+</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 8.5</td>
                                        <td class="hidden-480">Win 95+ / OSX.2+</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 9.0</td>
                                        <td class="hidden-480">Win 95+ / OSX.3+</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 9.2</td>
                                        <td class="hidden-480">Win 88+ / OSX.3+</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera 9.5</td>
                                        <td class="hidden-480">Win 88+ / OSX.3+</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Opera for Wii</td>
                                        <td class="hidden-480">Wii</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Nokia N800</td>
                                        <td class="hidden-480">N800</td>
                                        <td class="hidden-480">-</td>
                                        <td class="hidden-480">A</td>
                                    </tr>
                                    <tr>
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td class="hidden-480">Nintendo DS</td>
                                        <td class="hidden-480">8.5</td>
                                        <td class="hidden-480">C/A<sup>1</sup></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- End tab pane -->

            </div>
        </div>
        <!--end tabbable-->
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->