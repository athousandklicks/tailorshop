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
                                        <a data-toggle="collapse" data-parent="#shirtdesign-accordion" href="#collapseOne">
                                            <em>Collar Type </em>
                                            <i class="indicator fa fa-angle-down pull-right"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="tab-nav" role="tablist" >
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
                    <img :src="fabric_image_src+order.fabric" height="100" width="100">
                    <li><span>Order ID:</span> {{order.order_id}}</li>
                    <li><span>Fabric:</span> {{order.fabric}}</li>
                    <li><span>Gender:</span> {{order.gender}} </li>
                    <li><span>Collar Type:</span> {{order.collar}} </li>
                </ul>
            </div>


                </div>
            </div>
        </div>
    </div>




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
                        <button type="button" @click="updateCollarType" class="btn btn-primary">Confirm</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
    <!-- Main End -->
</template>

<script>
export default {
   data(){
    return {
        designChoice: {
                    collar: '',
                },

        errors: [],

        fabric_image_src: '/images/fabrics/',
     

        image_src: '/images/collartypes/', //Link to Collar Type Images
        collarTypeName: '',     //Holds array of Collar types from the Controller
        selectedCollarType: {}, //Used to submit selected collar type to DB
        update_collarType: {},  //Holds an array of value used for submitting CT

        orders: [],
        
        

    }
},

mounted() {
    this.loadOrder();
    this.loadCollarTypes();
},

props: ['current_order_id'],

methods: {
    initUpdate(index)
    {
        this.errors = [];
        $("#update_collarType_model").modal("show");
        this.update_collarType = this.collarTypeName[index];
    },

    loadOrder()
    {
        axios.get('/makeshirts/' + this.current_order_id) 
        .then(response => {
            this.orders = response.data.orders;
        });
    },

    loadCollarTypes()
    {
        axios.get('/collarType')
        .then(response => {
            this.collarTypeName = response.data.collartypes;
        });
    },
    
    updateCollarType()
            {
                axios.put('/makeshirts/' + this.current_order_id, {
                    collar: this.update_collarType.name,
                })
                    .then(response => {

                        $("#update_collarType_model").modal("hide");

                    })
                    .catch(error => {
                        this.errors = [];
                        if (error.response.data.errors.name) {
                            this.errors.push(error.response.data.errors.name[0]);
                        }

                        if (error.response.data.errors.description) {
                            this.errors.push(error.response.data.errors.description[0]);
                        }
                    });
            },
},
             computed: {
                   csrfToken() { 
                    window.Laravel.csrfToken; 
                }
             }
}
</script>

<style>

</style>
}}