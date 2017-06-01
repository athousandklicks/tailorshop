

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-6 wiget-full">
        <div class="widget selection">
            <form>
                <fieldset>
                    <div class="panel-group sidebar-accordion theme-accordion" id="sidebar-accordion">
                        <div class="panel accordion-pannel">
                            <div class="accordion-heading">
                                <h4>
                                    <a data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapseOne">
                                        <em>Products</em>
                                        <i class="indicator fa fa-angle-down pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <label><em><a href="{{route('product.create')}}">Add Product</a></em></label>
                                    <label><em><a href="{{route('product.index')}}">View Products</a></em></label>
                                </div>
                            </div>
                        </div>
                        <div class="panel accordion-pannel">
                            <div class="accordion-heading">
                                <h4>
                                    <a data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapseTwo">
                                        <em>Manage Tailoring</em>
                                        <i class="indicator fa fa-angle-right pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <label><em><a href="">Ipsum</a></em>
                                    </label>               
                                </div>
                            </div>
                        </div>
                        <div class="panel accordion-pannel">
                            <div class="accordion-heading">
                                <h4>
                                    <a data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapseThree">
                                        <em>Manage Orders</em>
                                        <i class="indicator fa fa-angle-right pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <label><em><a href="">Ipsum</a></em>
                                    </label>  
                                </div>
                            </div>
                        </div>
                        <div class="panel accordion-pannel">
                            <div class="accordion-heading">
                                <h4>
                                    <a data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapseFour">
                                        <em>Store Settings</em>
                                        <i class="indicator fa fa-angle-right pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <label><em><a href="{{route('category.index')}}">Add Product Categories</a></em>
                                    </label> 
                                    <label><em><a href="{{route('size.index')}}">Add Product Sizes</a></em>
                                    </label>
                                  <!--  <label><em><a href="{{--route('colour.index')--}}">Add Product Colours</a></em>
                                    </label> -->


                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

