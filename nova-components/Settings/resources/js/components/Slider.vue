<template>
	<div>
		

        <form  @submit.prevent="createSlider" enctype="multipart/form-data">

	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Slider Name:</label>
	            <input type="text" v-model='slider.title' class="form-control">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Slider description</label>
	            <textarea v-model='slider.desc' class="form-control" ></textarea>
	          </div>
	          <div class="form-group" >

	              <img :src="slider.image" class="img-responsive" height="70" width="90">
	   
	              <input type="file" v-on:change="onImageChange" class="form-control">

	          </div>


	   
	       <button type="submit" class="btn btn-primary">Save changes</button>
	     
	    </form>


	    <div v-for="setting in this.settings" class="single clearfix">
            <div class="singleimg">
                <img :src="'/images/'+setting.image">
            </div>
            
            <div class="singledesc">
                <h3>{{setting.title}}</h3>
                <p>{{setting.des}}</p>
                
            </div>
            <div class="button">
                <button @click="deleteslide(setting.id)">delete</button>
                <button @click="editslide(setting.id)" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                     Edit
                </button>
            </div>
        </div>

		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add new Slide</h5>
                <button @click="resetslider()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form @submit.prevent="updateSlider" enctype="multipart/form-data">
              <div class="modal-body">

              	<div class="form-group">
                    <label for="recipient-name" class="col-form-label">Slider Name:</label>
                    <input type="hidden" v-model='slider.id' class="form-control">
                  </div>

                  <div class="form-group">
                    <input type="text" v-model='slider.title' class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Slider description</label>
                    <textarea v-model='slider.desc' class="form-control" id="message-text"></textarea>
                  </div>
                  <div class="form-group" >
                       <!--  <input @change = "changePhoto($event)" name="image" type="file" >
                        <img :src="slider.image" alt="" width="80" height="80"> -->

                      <img :src="'/images/'+slider.image" class="img-responsive" height="70" width="90">
           
                      <input type="file" v-on:change="onImageChange" class="form-control">

                  </div>
               </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              </form>
            </div>
          </div>
        </div>

	</div>
</template>
<script>


export default {


data() {
    return {
        image: "",
        settings: {},
        slider:{},
    }
},

mounted() {

   
},

created(){
    Nova.request().get('/nova-vendor/settings/getset').then((response) => { 
            console.log(response.data)
            this.settings = response.data;
        });
    
},
computed:{

},
methods:{



    onImageChange(e) {
        let files = e.target.files || e.dataTransfer.files;
        if (!files.length)
            return;
        this.createImage(files[0]);
    },
    createImage(file) {
        let reader = new FileReader();
        let vm = this;
        reader.onload = (e) => {
            vm.slider.image = e.target.result;
        };
        reader.readAsDataURL(file);
    },
    updateSlider(){
        Nova.request().post('/nova-vendor/settings/saveedit', {
        			id : this.slider.id,
                    title: this.slider.title,
                    desc: this.slider.desc,
                    image: this.slider.image
                })
                .then((response) => {
                	console.log(response.data)
                // Display a warning toast, with no title
                    Nova.request().get('/nova-vendor/settings/getset').then((response) => { 
                        
                        this.settings = response.data;
                    });



                swal({
                     text: "Your Settings has been Changed.",
                     type: "success",
                     timer: 1000
                    });

              });
    },

    createSlider(){

        Nova.request().post('/nova-vendor/settings/saveslider', {
            title: this.slider.title,
            desc: this.slider.desc,
            image: this.slider.image
        })
        .then((response) => {
        	console.log(response.data)
        // Display a warning toast, with no title

            Nova.request().get('/nova-vendor/settings/getset').then((response) => { 
                //console.log(response.data)
                this.settings = response.data;
            });

            
        
      });

        
    },

    deleteslide(id){
        Nova.request().post('/nova-vendor/settings/deleteslider', {
            id : id
        })
        .then((response) => { 
            Nova.request().get('/nova-vendor/settings/getset').then((response) => { 
            console.log(response.data)
            this.settings = response.data;
        });
            swal({
             text: "Your Slider has been Deleted.",
             type: "success",
             timer: 1000
            });
        });
    },

    editslide(id){
        
        Nova.request().post('/nova-vendor/settings/editslider', {
            id : id
        })

        .then((response) => {
            this.edit = response.data.id
            // console.log(response.data.title)
            this.slider = response.data
            // this.slider.title = response.data.title
            // this.slider.desc = response.data.des
            // this.slider.image = response.data.image
        });

    }


    
}
}
</script>

<style>
	footer{
		height: 200px;
	}
	.sliderimg{

	    height: 100px;
	    width: 200px;
	    float: left;

	}

	.sliderdesc{
	     width: 70%;
	    float: right;
	}

	form{
		width: 70%;
		margin-left: 40px;
	}

</style>