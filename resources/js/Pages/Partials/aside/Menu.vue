<template>
    <ul class="menu-nav">
        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item menu-item-active menu-item-active">
            <inertia-link :href="$route('dashboard.index')" class="menu-link">
                <i class="menu-icon flaticon2-architecture-and-city"></i><span class="menu-text">Dashboard</span>
            </inertia-link>
        </li>

<!--        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item">-->
<!--            <inertia-link :href="$route('interests.index')" class="menu-link">-->
<!--                <i class="menu-icon flaticon2-expand"></i><span class="menu-text">Interests</span>-->
<!--            </inertia-link>-->
<!--        </li>-->
        <li class="menu-section"><h4 class="menu-text">ACTIONS</h4><i class="menu-icon flaticon-more-v2"></i></li>
<!--        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item menu-item-submenu">-->
<!--            <a href="#" class="menu-link menu-toggle"><i class="menu-icon flaticon2-digital-marketing"></i><span class="menu-text">Vue Bootstrap</span><i class="menu-arrow"></i></a>-->
<!--            <div class="menu-submenu"><span class="menu-arrow"></span>-->
<!--                <ul class="menu-subnav"><li aria-haspopup="true" class="menu-item menu-item-parent"><span class="menu-link"><span class="menu-text">Vue Bootstrap</span></span></li>-->
<!--            <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item"><a href="#/vue-bootstrap/alert" class="menu-link"><i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Alert</span></a></li>-->
<!--                <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item"><a href="#/vue-bootstrap/badge" class="menu-link">-->
<!--                <i class="menu-bullet menu-bullet-dot"><span></span></i><span class="menu-text">Badge</span></a></li>-->
<!--            </ul>-->
<!--            </div>-->
<!--        </li>-->
        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item menu-item-active">
            <inertia-link :href="$route('loans.index')" class="menu-link">
                <i class="menu-icon flaticon-web"></i><span class="menu-text">Loans</span>
            </inertia-link>
        </li>
        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item">
            <inertia-link :href="$route('interests.index')" class="menu-link">
                <i class="menu-icon flaticon-web"></i><span class="menu-text">Interests</span>
            </inertia-link>
        </li>

        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item">
            <inertia-link :href="$route('penalities.index')" class="menu-link">
                <i class="menu-icon flaticon-web"></i><span class="menu-text">Penalities</span>
            </inertia-link>
        </li>

        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item menu-item-active">
            <inertia-link :href="$route('credit-scores.index')" class="menu-link">
                <i class="menu-icon flaticon-web"></i><span class="menu-text">Credit Scores</span>
           </inertia-link>
        </li>


        <li class="menu-section"><h4 class="menu-text">Settings</h4><i class="menu-icon flaticon-more-v2"></i></li>
        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item">
            <inertia-link :href="$route('loan-types.index')" class="menu-link">
                <i class="menu-icon flaticon-web"></i><span class="menu-text">Loan Types</span>
            </inertia-link>
        </li>

        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item">
            <inertia-link :href="$route('interest-types.index')" class="menu-link">
                <i class="menu-icon flaticon-web"></i><span class="menu-text">Interest Types</span>
            </inertia-link>
        </li>

        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item">
            <inertia-link :href="$route('credit-score-types.index')" class="menu-link">
                <i class="menu-icon flaticon-web"></i><span class="menu-text">Credit Score Types</span>
            </inertia-link>
        </li>
        <li aria-haspopup="true" data-menu-toggle="hover" class="menu-item">
            <inertia-link :href="$route('penality-types.index')" class="menu-link">
                <i class="menu-icon flaticon-web"></i><span class="menu-text">Penality Types</span>
            </inertia-link>
        </li>
    </ul>
</template>

<script>
export default {
  name: "KTMenu",
    data(){
      return {
          href:'#',
          isActive:false,
          isExactActive:false
      }
    },
  methods: {
    hasActiveChildren(match) {
        return true;
     // return this.$route["path"].indexOf(match) !== -1;
    },
      navigate(){
      }
  }
};
</script>
