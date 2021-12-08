<template>
    <div>

        <div class="d-flex flex-column flex-root">
<!--         start header mobile-->
            <KTHeaderMobile></KTHeaderMobile>
<!--     end header mobile -->

            <div class="page-loader page-loader-logo"><img alt="Logo" src="/media/logos/logo-letter-1.png" width="100"><div class="spinner spinner-primary"></div></div><div class="d-flex flex-row flex-column-fluid page">
<!--       start side bar-->
            <KTAside></KTAside>
<!--   end side bar -->

         <div id="kt_wrapper" class="d-flex flex-column flex-row-fluid wrapper">
<!--               start header-->
          <KTHeader></KTHeader>
<!--                end header -->
<!--               start content-->
               <div id="kt_content" class="content d-flex flex-column flex-column-fluid">


                   <div class="d-flex flex-column-fluid">
                       <div class="container">
                     <slot></slot>
                     </div>
                   </div>
               </div>
<!--             end content -->
<!--              start footer-->
                <KTFooter></KTFooter>
<!--               end footer -->
            </div>

        </div>
<!--          start scrollTop-->
            <div id="kt_scrolltop" class="scrolltop"><span class="svg-icon"><svg version="1.1" viewBox="0 0 24 24" height="24px" width="24px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title xmlns="http://www.w3.org/2000/svg">Stockholm-icons / Navigation / Up-2</title>
    <desc xmlns="http://www.w3.org/2000/svg">Created with Sketch.</desc>
    <defs xmlns="http://www.w3.org/2000/svg"></defs>
    <g xmlns="http://www.w3.org/2000/svg" id="Stockholm-icons-/-Navigation-/-Up-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <rect id="Rectangle" fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"></rect>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg></span>
            </div>
<!--          end scrollTop-->



        </div>


<!--    <div class="d-flex flex-column flex-root">-->
<!--        &lt;!&ndash; begin:: Header Mobile &ndash;&gt;-->
<!--        <mobile-header></mobile-header>-->
<!--        &lt;!&ndash; end:: Header Mobile &ndash;&gt;-->

<!--&lt;!&ndash;        <Loader  v-bind:logo="loaderLogo"></Loader>&ndash;&gt;-->

<!--        <div className="d-flex flex-column flex-root">-->
<!--            &lt;!&ndash;begin::Page&ndash;&gt;-->
<!--            <div className="d-flex flex-row flex-column-fluid page">-->
<!--                &lt;!&ndash;begin::Aside&ndash;&gt;-->
<!--                <KTAside></KTAside>-->
<!--                &lt;!&ndash;end::Aside&ndash;&gt;-->
<!--                &lt;!&ndash;begin::Wrapper&ndash;&gt;-->
<!--                <div className="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">-->
<!--                    &lt;!&ndash;begin::Header&ndash;&gt;-->
<!--                    <KTHeader></KTHeader>-->
<!--                    &lt;!&ndash;end::Header&ndash;&gt;-->
<!--                    &lt;!&ndash;begin::Content&ndash;&gt;-->
<!--                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">-->
<!--                        &lt;!&ndash;begin::Entry&ndash;&gt;-->
<!--                        <div class="d-flex flex-column-fluid">-->
<!--                            &lt;!&ndash;begin::Container&ndash;&gt;-->
<!--                            <slot></slot>-->
<!--                            &lt;!&ndash;end::Container&ndash;&gt;-->
<!--                        </div>-->
<!--                        &lt;!&ndash;end::Entry&ndash;&gt;-->
<!--                    </div>-->
<!--                    &lt;!&ndash;end::Content&ndash;&gt;-->
<!--                    &lt;!&ndash;begin::Footer&ndash;&gt;-->
<!--                    <KTFooter></KTFooter>-->
<!--                    &lt;!&ndash;end::Footer&ndash;&gt;-->
<!--                </div>-->
<!--                &lt;!&ndash;end::Wrapper&ndash;&gt;-->
<!--            </div>-->
<!--            &lt;!&ndash;end::Page&ndash;&gt;-->
<!--        </div>-->

<!--        &lt;!&ndash; begin::Body &ndash;&gt;-->
<!--&lt;!&ndash;        <div class="d-flex flex-row flex-column-fluid page">&ndash;&gt;-->
<!--&lt;!&ndash;            &lt;!&ndash; begin:: Aside Left &ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;            <KTAside></KTAside>&ndash;&gt;-->
<!--&lt;!&ndash;            &lt;!&ndash; end:: Aside Left &ndash;&gt;&ndash;&gt;-->

<!--&lt;!&ndash;            <div id="kt_wrapper" class="d-flex flex-column flex-row-fluid wrapper">&ndash;&gt;-->
<!--&lt;!&ndash;                &lt;!&ndash; begin:: Header &ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;                <KTHeader></KTHeader>&ndash;&gt;-->
<!--&lt;!&ndash;                &lt;!&ndash; end:: Header &ndash;&gt;&ndash;&gt;-->

<!--&lt;!&ndash;                &lt;!&ndash; begin:: Content &ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;                <div&ndash;&gt;-->
<!--&lt;!&ndash;                    id="kt_content"&ndash;&gt;-->
<!--&lt;!&ndash;                    class="content d-flex flex-column flex-column-fluid"&ndash;&gt;-->
<!--&lt;!&ndash;                >&ndash;&gt;-->
<!--&lt;!&ndash;                    &lt;!&ndash; begin:: Content Head &ndash;&gt;&ndash;&gt;-->

<!--&lt;!&ndash;                    &lt;!&ndash; begin:: Content Head &ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                    <KTSubheader&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                        v-if="subheaderDisplay"&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                        v-bind:breadcrumbs="breadcrumbs"&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                        v-bind:title="pageTitle"&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                    />&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;                    &lt;!&ndash; end:: Content Head &ndash;&gt;&ndash;&gt;-->

<!--&lt;!&ndash;                    &lt;!&ndash; begin:: Content Body &ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;                    <div class="d-flex flex-column-fluid">&ndash;&gt;-->
<!--&lt;!&ndash;                        <div>&ndash;&gt;-->
<!--&lt;!&ndash;                           <slot></slot>&ndash;&gt;-->
<!--&lt;!&ndash;                        </div>&ndash;&gt;-->
<!--&lt;!&ndash;                    </div>&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;                <KTFooter></KTFooter>&ndash;&gt;-->
<!--&lt;!&ndash;            </div>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;        <KTStickyToolbar></KTStickyToolbar>&ndash;&gt;-->
<!--&lt;!&ndash;        <KTScrollTop></KTScrollTop>&ndash;&gt;-->
<!--    </div>-->
    </div>
</template>

<script>
import KTAside from "./aside/Aside.vue";
import KTHeader from "./header/Header.vue";
import KTHeaderMobile from "./header/HeaderMobile.vue";
import KTFooter from "./footer/Footer.vue";
import KTStickyToolbar from "./extras/StickyToolbar.vue";
import KTScrollTop from "./extras/ScrollTop";

export default {
    props:{
        user:{type:Object}
    },
    name: "Layout",
    components: {
        KTAside,
        KTHeader,
        KTHeaderMobile,
        KTFooter,
        KTStickyToolbar,
        KTScrollTop
    },
    beforeMount() {
        // show page loading
        //this.$store.dispatch(ADD_BODY_CLASSNAME, "page-loading");

        // initialize html element classes
      //  HtmlClass.init(this.layoutConfig());
    },
    methods: {},
    computed: {

        /**
         * Check if the page loader is enabled
         * @returns {boolean}
         */
        loaderEnabled() {
            //return !/false/.test(this.layoutConfig("loader.type"));
        },

        /**
         * Check if container width is fluid
         * @returns {boolean}
         */
        contentFluid() {
            return this.layoutConfig("content.width") === "fluid";
        },

        /**
         * Page loader logo image using require() function
         * @returns {string}
         */
        loaderLogo() {
            return process.env.BASE_URL + this.layoutConfig("loader.logo");
        },

        /**
         * Check if the left aside menu is enabled
         * @returns {boolean}
         */
        asideEnabled() {
            return !!this.layoutConfig("aside.self.display");
        },

        /**
         * Set the right toolbar display
         * @returns {boolean}
         */
        toolbarDisplay() {
            // return !!this.layoutConfig("toolbar.display");
            return true;
        },

        /**
         * Set the subheader display
         * @returns {boolean}
         */
        subheaderDisplay() {
            //return !!this.layoutConfig("subheader.display");
        }
    }
};
</script>


<style lang="scss">
// 3rd party plugins css
//@import "~bootstrap-vue/dist/bootstrap-vue.css";
//@import "~perfect-scrollbar/css/perfect-scrollbar.css";
//@import "~socicon/css/socicon.css";
//@import "~@fortawesome/fontawesome-free/css/all.css";
//@import "~line-awesome/dist/line-awesome/css/line-awesome.css";
//@import "../../assets/plugins/flaticon/flaticon.css";
//@import "../../assets/plugins/flaticon2/flaticon.css";
//@import "../../assets/plugins/keenthemes-icons/font/ki.css";
//
//// Main demo style scss
//@import "../../assets/sass/style.vue";

// Check documentation for RTL css
// Update HTML with RTL attribute at public/index.html
/*@import "assets/css/style.vue.rtl";*/
</style>
