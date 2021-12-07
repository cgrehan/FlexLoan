<template>
    <div>
        <app-layout>
            <div>
                <div class="row">
                    <div class="col-xxl-4">
                        <MixedWidget1></MixedWidget1>
                    </div>
                    <div class="col-xxl-4">
                        <Widget2></Widget2>
                    </div>

            <div class="col-xxl-4">
                <Widget3></Widget3>
                <Widget4></Widget4>
                </div>

      <div class="col-xxl-4 order-1 order-xxl-1">
          <Widget5></Widget5>
      </div>

 <div class="col-xxl-8 order-2 order-xxl-1">
     <Widget6></Widget6>
 </div>


  <div class="col-xxl-4 order-1 order-xxl-2">
      <Widget7></Widget7>
  </div>
<div class="col-xxl-4 order-1 order-xxl-2">
    <Widget8></Widget8>
</div>


<div class="col-xxl-4 order-1 order-xxl-2">
    <Widget9></Widget9>
</div>
                </div>
            </div>
        </app-layout>
        <!--end::Dashboard-->
    </div>
</template>

<script>

import MixedWidget1 from "./widgets/Widget1";
import Widget2 from "./widgets/Widget2";
import Widget3 from "./widgets/Widget3";
import Widget4 from "./widgets/Widget4";
import Widget5 from "./widgets/Widget5";
import Widget6 from "./widgets/Widget6";
import Widget7 from "./widgets/Widget7";
import Widget8 from "./widgets/Widget8";
import Widget9 from "./widgets/Widget9";

export default {
   components:{
     MixedWidget1,
       Widget2,
       Widget3,
       Widget4,
       Widget5,
       Widget6,
       Widget7,
       Widget8,
       Widget9
   },
    methods: {
        setActiveTab1(event) {
            this.tabIndex = this.setActiveTab(event);
        },
        setActiveTab2(event) {
            this.tabIndex2 = this.setActiveTab(event);
        },
        /**
         * Set current active on click
         * @param event
         */
        setActiveTab(event) {
            // get all tab links
            const tab = event.target.closest('[role="tablist"]');
            const links = tab.querySelectorAll(".nav-link");
            // remove active tab links
            for (let i = 0; i < links.length; i++) {
                links[i].classList.remove("active");
            }

            // set current active tab
            event.target.classList.add("active");

            // set clicked tab index to bootstrap tab
            return parseInt(event.target.getAttribute("data-tab"));
        }
    }
};
</script>
