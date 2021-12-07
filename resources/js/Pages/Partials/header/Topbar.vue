<template>
    <div>
     <div class="topbar">
     <div data-v-8b11b090="" class="topbar-item">
         <div data-v-8b11b090="" id="kt_quick_user_toggle" class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2"><span data-v-8b11b090="" class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1"> Hi, </span><span data-v-8b11b090="" class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"> Sean </span><span data-v-8b11b090="" class="symbol symbol-35 symbol-light-success"><!---->
            <span data-v-8b11b090="" class="symbol-label font-size-h5 font-weight-bold"> S </span></span></div><div data-v-8b11b090="" id="kt_quick_user" class="offcanvas offcanvas-right p-10">
     </div>
     </div>
     </div>
  <!-- begin:: Header Topbar -->
<!--  <div class="topbar">-->
<!--    &lt;!&ndash;begin: Quick panel toggle &ndash;&gt;-->
<!--    <KTQuickPanel></KTQuickPanel>-->
<!--    &lt;!&ndash;end: Quick panel toggle &ndash;&gt;-->


<!--    &lt;!&ndash;begin: User Bar &ndash;&gt;-->
    <KTQuickUser></KTQuickUser>
<!--    &lt;!&ndash;end: User Bar &ndash;&gt;-->
<!--  </div>-->
  <!-- end:: Header Topbar -->
    </div>
</template>

<style lang="scss">
.topbar {
  .dropdown-toggle {
    padding: 0;
    &:hover {
      text-decoration: none;
    }

    &.dropdown-toggle-no-caret {
      &:after {
        content: none;
      }
    }
  }

  .dropdown-menu {
    margin: 0;
    padding: 0;
    outline: none;
    .b-dropdown-text {
      padding: 0;
    }
  }
}
</style>
<script>


import KTQuickUser from "../extras/offcanvas/QuickUser.vue";

export default {
  name: "KTTopbar",
  data() {
    return {

    };
  },
  components: {
    KTQuickUser,
  },
  methods: {
  },
  computed: {
  }
};
</script>
