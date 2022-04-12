

    <?php use Illuminate\Support\Facades\Auth;
 $role= Auth::guard('admin')->user()->role;;
 ?>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
::-webkit-scrollbar {
    display: none;
}
.sidebar{
  position: fixed;
  left: 0;
  top: 151px;
  height: 100%;
  width: 78px;
  background: #11101D;
  padding: 0px 10px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar.open{
  width: 250px;
  overflow-y: scroll;
}
.sidebar .logo-details{
  height: 20px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 140vh;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open .bx-search:hover{
  background: #1d1b31;
  color: #FFF;
}
.sidebar .bx-search:hover{
  background: #FFF;
  color: #11101d;
}
.sidebar li a{
  display: flex;
  /* height: 100%; */
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
  width: 100%;
  line-height: 50px;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 15px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .job{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}
.sidebar li.profile .job{
  font-size: 12px;
}
.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.home-section{
  position: relative;
  background: #E4E9F7;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
.home-section .text{
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
#content{    padding-left: 100px;}
.sidebar.open ul.nav-list li ul li a {
    color: #969696;
}
.sidebar.open ul.nav-list li ul li {
    list-style: disc;
    padding-bottom: 10px;
}
.sidebar.open ul.nav-list li ul li a:hover{
   background: unset;
   text-decoration:underline;
}
.sidebar.open li a .links_name i {
    float: right;
}
</style>











<div class="scrol">
  <div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Logo</div>
        <i class='fa fa-bars' id="btn" ></i>

    </div>
    <ul class="nav-list">
      <li>
        <a href="{{route('admin.dashboard')}}">
        <i class="fa fa-home" aria-hidden="true"></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#" >
         <i class='fa fa-users'></i>
         <span class="links_name" data-toggle="collapse" data-target="#Customers" aria-expanded="false" aria-controls="Customers">Customers<i class="fa fa-angle-right ml-4" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Customers</span>
              <ul class="collapse pl-4" id="Customers" >
                    <li>
                        <a href="{{asset('admin/all_costumers')}}"> All Customer </a>
                    </li>
                    <li>
                        <a href="{{asset('admin/add_costumers')}}"> Add Customer</a>
                    </li>
              </ul>
     </li>
     <li>
       <a href="#">
         <i class='fa fa-male' ></i>
         <span class="links_name" data-toggle="collapse" data-target="#Staff" aria-expanded="false" aria-controls="Staff">Staff<i class="fa fa-angle-right" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Staff</span>
            <ul class="collapse pl-4" id="Staff" >
                <li>
                    <a href="{{route('admin.staff')}}"> All Staff </a>
                </li>
                <li>
                    <a href="{{asset('admin/staff_add')}}"> Add Staff</a>
                </li>
            </ul>
     </li>
     <li>
       <a href="#">
         <i class='fa fa-file-o' ></i>
         <span class="links_name" data-toggle="collapse" data-target="#myod" aria-expanded="false" aria-controls="order">Orders<i class="fa fa-angle-right" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Orders</span>
            <ul class="collapse pl-4" id="myod" >
      
                <li>
                    <a href="{{asset('admin/all_orders')}}">All Order</a>
                </li>
                <li>
                    <a href="{{asset('admin/new_order')}}">Create Order</a>
                </li>
            </ul>
     </li>
     <li>
       <a href="#">
         <i class='fa fa-shopping-cart' ></i>
         <span class="links_name" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product">Products<i class="fa fa-angle-right ml-4" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Products</span>
            <ul class="collapse pl-4" id="product" >
                <li>
                    <a href="{{route('admin.All_product')}}">All Product </a>
                </li>

                <li>
                    <a href="{{route('admin.new_product')}}">Add product</a>
                </li>

                <li>
                    <a href="{{route('admin.category')}}">Categories </a>
                </li>

                <li>
                    <a href="{{route('admin.brand')}}">Brands</a>
                </li>

                <li>
                    <a href="{{route('admin.attribute')}}">Attributes</a>
                </li>
                
                <li>
                    <a href="{{route('admin.colors')}}">Colors</a>
                </li>
            </ul>
     </li>


     <li>
       <a href="#">
         <i class='fa fa-file-o' ></i>
         <span class="links_name" data-toggle="collapse" data-target="#blog" aria-expanded="false" aria-controls="Blog">Blog System<i class="fa fa-angle-right" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Blog System</span>
            <ul class="collapse pl-4" id="blog" >
                <li>
                    <a href="{{route('admin.blog')}}"> All Blog Posts </a>
                </li>
                <li>
                    <a href="{{asset('admin/blog_category')}}">Blog categories </a>
                </li>
            </ul>
     </li>

     <li>
       <a href="{{asset(route('admin.gallery'))}}">
         <i class='fa fa-cloud-upload' ></i>
         <span class="links_name">Uploaded Files</span>
       </a>
       <span class="tooltip">Uploaded Files</span>
     </li>
     <li>
       <a href="#">
         <i class='fa fa-life-ring' ></i>
         <span class="links_name" data-toggle="collapse" data-target="#support" aria-expanded="false" aria-controls="Blog">Support<i class="fa fa-angle-right" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Support</span>
        <ul class="collapse pl-4" id="support" >
            <li>
                <a href="{{asset('/admin/support')}}"> Ticket </a> 
            </li>
            <li>
                <a href="{{asset('/admin/product_query')}}">">Product Queries</a>
            </li>
        </ul>
     </li>
     <li>
       <a href="{{asset('admin/addOn')}}">
         <i class='fa fa-desktop' ></i>
         <span class="links_name">Addon Manager </span>
       </a>
       <span class="tooltip">Addon Manager </span>
     </li>
     <li>
       <a href="#">
       <i class="fa fa-bar-chart"></i>
         <span class="links_name" data-toggle="collapse" data-target="#marketing" aria-expanded="false" aria-controls="Blog">Marketing<i class="fa fa-angle-right" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Marketing</span>
        <ul class="collapse pl-4" id="marketing" >
            <li>
                <a href="{{asset('admin/coupan')}}"> Coupon </a>  
            </li>
        </ul>
     </li>
     <li>
       <a href="#">
         <i class='fa fa-cogs' ></i>
         <span class="links_name" data-toggle="collapse" data-target="#affilicate" aria-expanded="false" aria-controls="Blog">Affilicate System<i class="fa fa-angle-right" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Affilicate System</span>
        <ul class="collapse pl-4" id="affilicate" >
            <li>
                <a href="#"> Affiliate Registration Form </a>
            </li>
            <li>
                <a href="#">Affiliate Configurations</a>
            </li>
            <li>
                <a href="#"> Affiliate refferal </a>
            </li>
            <li>
                <a href="#"> Refferal refferal </a>
            </li>
            <li>
                <a href="#"> Affiliate Withdraw Request  </a>
            </li>
            <li>
                <a href="#"> Affiliate Logs</a>
            </li>
        </ul>
        
     </li>
     <li>
       <a href="#">
         <i class='fa fa-cog' ></i>
         <span class="links_name" data-toggle="collapse" data-target="#config" aria-expanded="false" aria-controls="Blog">Web Config<i class="fa fa-angle-right" aria-hidden="true"></i></span>
       </a>
       <span class="tooltip">Web Config</span>
        <ul class="collapse pl-4" id="config" >
            <li>
                <a href="#"> Home Banner </a>
            </li>
            <li>
                <a href="#">Category Banner </a>
            </li>
            <li>
                <a href="#"> Page Content </a>
            </li>
            <li>
                <a href="#"> About Us </a>
            </li>
            <li>
                <a href="#"> Privacy Policy  </a>
            </li>
            <li>
                <a href="#"> Contact Details </a>
            </li>
        </ul>
     </li>
     <!-- <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li> -->
     <!-- <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li> -->
    </ul>
  </div>
</div>



  <script>
      let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("mouseover", ()=>{ //mouseover->click
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

//mouseover->click
searchBtn.addEventListener("mouseover", ()=>{ // Sidebar open when you click on the search iocn//mouseover->click
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}

  </script>