

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
                                    <label><em><a href="{{route('product.index')}}">View Products (356)</a></em></label>
                                </div>
                            </div>
                        </div>
                        <div class="panel accordion-pannel">
                            <div class="accordion-heading">
                                <h4>
                                    <a data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapseTwo">
                                        <em>Categories</em>
                                        <i class="indicator fa fa-angle-right pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <label><em><a href="{{route('category.index')}}">Add Product Categories</a></em>
                                    </label>               
                                </div>
                            </div>
                        </div>
                        <div class="panel accordion-pannel">
                            <div class="accordion-heading">
                                <h4>
                                    <a data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapseThree">
                                        <em>Colours</em>
                                        <i class="indicator fa fa-angle-right pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <label><em><a href="{{route('colour.index')}}">Add Colours</a></em>
                                    </label>  
                                </div>
                            </div>
                        </div>
                        <div class="panel accordion-pannel">
                            <div class="accordion-heading">
                                <h4>
                                    <a data-toggle="collapse" data-parent="#sidebar-accordion" href="#collapseFour">
                                        <em>Show All</em>
                                        <i class="indicator fa fa-angle-right pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <label><input type="checkbox" name="brand" value=""><em>2XU <a href="#">(4)</a></em></label>
                                    <label><input type="checkbox" name="brand" value=""><em>Brooks <a href="#">(28)</a></em></label>

                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

