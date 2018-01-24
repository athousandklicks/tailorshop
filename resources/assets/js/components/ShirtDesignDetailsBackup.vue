{{<template>
<!-- Main Start -->
<div id="main" class="haslayout padding-section">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 width">
    <div class="product-making">
        <div class="product-tabs">
            <div class="head">
                <div id="product-tabs" class="product-tabs">
                    <div class="item">
                        <a href="#top-rated">Enter your Parameters</a>
                    </div>
                </div>
            </div>

            <div id="product-tab-data" class="product-tab-data"> 

                <div class="item design-shirt">
                    <form class="shirtdesign-form">
                        <fieldset>
                            <div class="panel-group shirtdesign-accordion theme-accordion" id="shirtdesign-accordion">
                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseZero">
                                                <em>Measurement</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseZero" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul>
                                                <li class="col-sm-5">
                                                    <img src="/images/thumb1.jpg" alt="image description">
                                                </li>
                                                <li class="col-sm-7">
                                                    <div class="size-input">
                                                        <input type="text" class="form-control" placeholder="Neck (cm)">
                                                    </div>
                                                    <div class="size-input">
                                                        <input type="text" class="form-control" placeholder="Arm Round (cm)">
                                                    </div>
                                                    <div class="size-input">
                                                        <input type="text" class="form-control" placeholder="Arm Length (cm)">
                                                    </div>
                                                    <div class="size-input">
                                                        <input type="text" class="form-control" placeholder="Chest Bust (cm)">
                                                    </div>
                                                    <div class="size-input">
                                                        <input type="text" class="form-control" placeholder="Front Length (cm)">
                                                    </div>
                                                    <div class="size-input">
                                                        <input type="text" class="form-control" placeholder="Hip (cm)">
                                                    </div>
                                                    <div class="size-input">
                                                        <input type="text" class="form-control" placeholder="Back Length (cm)">
                                                    </div>

                                                    <div class="size-sub">
                                                        <button type="submit" class="theme-btn checkout-btn">Submit</button>
                                                    </div>
                                                </li>
                                            </ul>



                                        </div>
                                    </div>
                                </div>

                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseOne">
                                                <em>Collar Type </em>
                                                <i class="indicator fa fa-angle-down pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist" >
                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="chooseCollarType(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseTwo">
                                                <em>Sleeve and Cuffs</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">
                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(sleeve_and_cuffs, index) in Sleeve_CuffName">
                                                    <label>
                                                        <img :src="Sleeve_Cuff_src+sleeve_and_cuffs.img_link" height="100" width="100" @click="chooseSleeveAndCuffs(index)">
                                                    </label>
                                                    <p>{{sleeve_and_cuffs.name}}</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseThree">
                                                <em>Pockets</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">

                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="initUpdate(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseFour">
                                                <em>Placket</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">
                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="initUpdate(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseFive">
                                                <em>Fit</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">

                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">
                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="initUpdate(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseSix">
                                                <em>Back</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse">

                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">

                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="initUpdate(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseSeven">
                                                <em>Bottom</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse">

                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">

                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="initUpdate(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseEight">
                                                <em>Zipper Types</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse">

                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">

                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="initUpdate(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseNine">
                                                <em>Pocket hankerchief</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse">

                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">

                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="initUpdate(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseTen">
                                                <em>Thread Colour</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTen" class="panel-collapse collapse">

                                        <div class="panel-body">
                                            <ul class="tab-nav" role="tablist">

                                                <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(collartype, index) in collarTypeName">
                                                    <label>
                                                        <img :src="image_src+collartype.img_link" height="100" width="100" @click="initUpdate(index)">
                                                    </label>
                                                    <p>{{collartype.name}}</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel accordion-pannel">
                                    <div class="accordion-heading">
                                        <h4>
                                            <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseEleven">
                                                <em>Miscellaneous</em>
                                                <i class="indicator fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
<div id="collapseEleven" class="panel-collapse collapse">

<div class="panel-body">

<ul class="tab-nav" role="tablist">

    <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(misc2, index) in miscsName2">
        <label>
            <img :src="miscs_src+misc2.img_link" height="100" width="100" @click="loadMiscFabrics2()">
        </label>
        <p>{{misc2.name}}</p>
    </li>

</ul>

<ul class="tab-nav" role="tablist">

    <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(misc, index) in miscsName">
        <label>
            <img :src="miscs_src+misc.img_link" height="100" width="100" @click="loadMiscFabrics(index)">
        </label>
        <p>{{misc.name}}</p>
    </li>

</ul>
</div>
</div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <div class="foot">
                        <div class="howitwork">
                            <div class="video-box">
                                <img src="/images/video-placeholder.jpg" alt="image description">
                            </div>
                            <div class="content-box">
                                <strong>How it works?</strong>
                                <p>Sed ut perspiciatis unde nis iste natus error sit volupttem accum oloremq unde nis.</p>
                            </div>
                        </div>
                        <div class="needhelp">
                            <strong>need help?</strong>
                            <p>Contact us for friendly, free help.</p>
                            <span>Call: 001-234-5678</span>
                            <span>Email: <a href="info@domain.com">info@domain.com</a></span>
                        </div>
                        <div class="likeus">
                            <strong>like us</strong>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 width">
    <div class="form-wrapper">
        <div class="form-heading">
            <a>Enter your Parameters 

            </a>
        </div>

        <div class="col formation">
            <ul class="orderlist" v-for="(order, key) in orders" v-bind:id="key">
                <img :src="fabric_image_src+order.fabric+ext" height="100" width="100">
                <li><span>Fabric:</span> {{order.fabric}}</li>
                <li><span>Order ID:</span> {{order.order_id}}</li>
                
                <li><span>Gender:</span> {{order.gender}} </li>
                <li><span>Collar Type:</span> {{order.collar}} </li>
                <li><span>Sleeve & Cuffs:</span> {{order.sleeve_and_cuffs}} </li>
            </ul>
        </div>


    </div>
</div>
</div>
</div>



<!-- /.Collar Type modal Begins -->
<div class="modal fade" tabindex="-1" role="dialog" id="update_collarType_model">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirm Collar Type</h4>
        </div>
        <div class="modal-body">

            <div class="alert alert-danger" v-if="errors.length > 0">
                <ul>
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </div>

            <form role="form">                    

                <div class="form-group">
                    <label>Collar Type:</label>
                    <img :src="image_src+update_collarType.img_link" height="250" width="250" v-model="update_collarType.img_link">
                </div>

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" placeholder="Collar Name" class="form-control" name="collar" id="collar"
                    v-model="update_collarType.name">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" @click="saveCollarType" class="btn btn-primary">Confirm</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.Collar type modal ends -->


<!-- /.Sleeve and Cuffs Modal Begins -->
<div class="modal fade" tabindex="-1" role="dialog" id="update_sleeve_and_cuffs_model">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm Sleeve and Cuff</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger" v-if="errors.length > 0">
                    <ul>
                        <li v-for="error in errors">{{ error }}</li>
                    </ul>
                </div>

                <form role="form">                    

                    <div class="form-group">
                        <label>Selected Sleeve and Cuff:</label>
                        <img :src="Sleeve_Cuff_src+update_sleeve_Cuff.img_link" height="250" width="250" v-model="update_sleeve_Cuff.img_link">
                    </div>

                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" placeholder="Sleeve and Cuff" class="form-control" name="sleeve_Cuff" id="sleeve_Cuff"
                        v-model="update_sleeve_Cuff.name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" @click="saveSleeveAndCuffs" class="btn btn-primary">Confirm</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.sleeve and cuffs modal ends -->



<div class="modal fade" tabindex="-1" role="dialog" id="update_miscs_model">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Select Fabric</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger" v-if="errors.length > 0">
                        <ul>
                            <li v-for="error in errors">{{ error }}</li>
                        </ul>
                    </div>            

                    <ul class="tab-nav" role="tablist">

                        <li role="presentation" class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pattran-half" v-for= "(fabric, index) in fabricName">
                            <label>
                                <img :src="fabric_src+fabric.image" height="100" width="100">
                            </label>

                            <form role="form"> 
                                <div class="form-group">
                                    <label>Fabric Name:{{fabric.name}}</label>
                                    <label>Misc Item:{{update_misc.name}}</label>                                
                                    <input type="hidden" class="form-control" name="misc" id="misc" v-model="update_misc.name" >

                                    <input type="hidden" class="form-control" name="fabric" id="fabric" v-model="fabric.name" >

                                    <button type="button" @click="saveMiscFabrics(index)" class="btn btn-primary">Select
                                    </button>

                                </div>


                            </form>    
                        </li>

                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- /.Misc 2 modal Begins -->
<div class="modal fade" tabindex="-1" role="dialog" id="update_misc2_model">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirm Selection</h4>
        </div>
        <div class="modal-body">

            <div class="alert alert-danger" v-if="errors.length > 0">
                <ul>
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </div>

            <form role="form">                    

                <div class="form-group">
                    <label>Miscellaneous Item:</label>
                    <img :src="miscs_src+misc2.img_link" height="250" width="250" >
                </div>

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="misc2" id="misc2"
                    v-model="update_misc2.name">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" @click="saveMiscItem2()" class="btn btn-primary">Confirm</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.Misc 2 modal ends -->



</div>
<!-- Main End -->
</template>



    <script>

    export default {
        data(){
            return {

                Miscellaneous: {
                    misc_fabric: '',
                    misc_item: '',
                },

                errors: [],
                orders: [],
                ext:'.jpg',


                fabric_image_src: '/images/fabrics/',


    //Collar Type Variables
    image_src: '/images/collartypes/', //Link to Collar Type Images
    collarTypeName: '',     //Holds array of Collar types from the Controller
    selectedCollarType: {}, //Used to submit selected collar type to DB
    update_collarType: {},  //Holds an array of value used for submitting CT

    //Sleeve and Cuffs Variables
    Sleeve_Cuff_src: '/images/sleeveAndCuffs/', //Link to Collar Type Images
    Sleeve_CuffName: '',     //Holds array of Collar types from the Controller
    selectedSleeve_Cuff: {}, //Used to submit selected collar type to DB
    update_sleeve_Cuff: {},  //Holds an array of value used for submitting CT

    //Misc Variables
    miscs_src: '/images/miscs/', //Link to Collar Type Images
    miscsName: '',     //Holds array of Collar types from the Controller
    selectedMisc: {}, //Used to submit selected collar type to DB
    update_misc: {},  //Holds an array of value used for submitting CT
    update_misc2: {},
    miscsName2: '',


    //Fabrics Variables
    fabric_src: '/images/fabrics/', //Link to Collar Type Images
    fabricName: '',     //Holds array of Collar types from the Controller
    selectedFabric: {}, //Used to submit selected collar type to DB
    update_fabric: {},  //Holds an array of value used for submitting CT






    }
    },

    mounted() {
        this.loadOrder();
        this.loadCollarTypes();
        this.loadSleeveAndCuffs();
        this.loadMiscs();
        this.loadMiscs2();
    },

    props: ['current_order_id'],

    methods: {

        loadOrder()
        {
            axios.get('/shirt-design-details/' + this.current_order_id) 
            .then(response => {
                this.orders = response.data.orders;
            });
        },

    //Collar Type Functions Begin   

    loadCollarTypes() //Loads all the collar types from DB
    {
        axios.get('/collars')
        .then(response => {
            this.collarTypeName = response.data.collartypes;
        });
    },

    chooseCollarType(index) //Init modal with the selected collar type
    {
        this.errors = [];
        $("#update_collarType_model").modal("show");
        this.update_collarType = this.collarTypeName[index];
    },

    saveCollarType() //Saves the selected collar type to DB
    {
        axios.put('/shirt-design-details/' + this.current_order_id, {
            collar: this.update_collarType.name,
        })
        .then(response => {

            $("#update_collarType_model").modal("hide");
        })
        .catch(error => {
            this.errors = [];
            if (error.response.data.errors.collar) {
                this.errors.push(error.response.data.errors.collar[0]);
            }
        });
    },

    //Collar Type Functions End


    //Sleeve and Cuffs Functions Begin   

    loadSleeveAndCuffs() //Loads all the collar types from DB
    {
        axios.get('/sleeve_and_cuffs')
        .then(response => {
            this.Sleeve_CuffName = response.data.sleeveAndCuffs;
        });
    },

    chooseSleeveAndCuffs(index) //Init modal with the selected collar type
    {
        this.errors = [];
        $("#update_sleeve_and_cuffs_model").modal("show");
        this.update_sleeve_Cuff = this.Sleeve_CuffName[index];
    },

    saveSleeveAndCuffs() //Saves the selected collar type to DB
    {
        axios.put('/shirt-design-details/' + this.current_order_id, {
            sleeve_cuffs: this.update_sleeve_Cuff.name,
        })
        .then(response => {

            $("#update_sleeve_and_cuffs_model").modal("hide");
        })
        .catch(error => {
            this.errors = [];
            if (error.response.data.errors.sleeve_cuffs) {
                this.errors.push(error.response.data.errors.sleeve_cuffs[0]);
            }

        });
    },

    //Sleeve and Cuffs Functions End

    //Miscellaneous Functions Begin 
    loadMiscs()
    {
        axios.get('/miscs')
        .then(response => {
            this.miscsName = response.data.miscs;
        });
    },

    //Get the index of the Misc Item and load with function. The index is used to determine which Misc Item was clicked before Fabrics are display. This info is then used to determine the field the fabric will be saved to in the shirts table in the DB.
    loadMiscFabrics(index) 
    {
        this.errors = [];

        $("#update_miscs_model").modal("show");
        this.update_misc = this.miscsName[index];

        axios.get('/choosefabric/create')
        .then(response => {
            this.fabricName = response.data.fabrics;
        });
    },

    saveMiscFabrics(index) //Saves the selected misc Item to DB
    {
        axios.put('/shirt-design-details/' + this.current_order_id, {
            misc_item: this.update_misc.name,
            misc_fabric: this.fabricName[index].name,
        })
        .then(response => {

            $("#update_miscs_model").modal("hide");
        })
        .catch(error => {
            this.errors = [];
            if (error.response.data.errors.misc_item) {
                this.errors.push(error.response.data.errors.misc_item[0]);
            }
            if (error.response.data.errors.misc_fabric) {
                this.errors.push(error.response.data.errors.misc_fabric[0]);
            }
        });
    },



    loadMiscs2()
    {
        axios.get('/miscs/create')
        .then(response => {
            this.miscsName2 = response.data.miscs2;
        });
    },

    loadMiscFabrics2(){
        this.errors = [];
        $("#update_miscs_model").modal("show");
        this.update_misc2 = this.miscsName2[index];
    },


    //Miscellaneous Functions End 
    },

    computed: {

    }
    }
    </script>

<style>

</style>
}}