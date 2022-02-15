<template>
<div>
    <app-layout>
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Penality Types</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <inertia-link :href="$route('penality-types.create')" class="btn btn-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
                                    <!--end::Svg Icon-->
								</span>New Record
                        </inertia-link>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <v-app>
                        <v-card>
                            <v-card-title>
                                <v-text-field
                                    v-model="search"
                                    append-icon="mdi-magnify"
                                    label="Search"
                                    single-line
                                    hide-details
                                ></v-text-field>
                                <v-spacer></v-spacer>
                            </v-card-title>
                            <v-data-table
                                :headers="headers"
                                :items="types"
                                :search="search"
                                item-key="id"
                                class="elevation-1"
                                :footer-props="{
                              showFirstLastPage: true,
                              firstIcon: 'mdi-arrow-collapse-left',
                              lastIcon: 'mdi-arrow-collapse-right',
                              prevIcon: 'mdi-minus',
                              nextIcon: 'mdi-plus'
                              }"
                            >
                                <template v-slot:item.actions="{ item }">
                                        <inertia-link :href="$route('penality-types.edit',item.id)">
                                            <v-icon>mdi-pencil</v-icon>
                                        </inertia-link>

                                        <v-icon @click="deleteType(item.id)">mdi-delete</v-icon>
                                </template>
                            </v-data-table>
                        </v-card>
                    </v-app>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </app-layout>

</div>
</template>

<script>


import fieldDefs from "./fieldDefs";

export default {
    props:['types'],
    data(){
        return {
            headers:fieldDefs,
            search:''
        }
    },
    methods:{
        deleteType(id){
        this.$inertia.delete(route("penality-types.destroy",id));
        }
    }
}
</script>

<style lang="scss">
@import "~vuetify/dist/vuetify.css";

.theme--light.v-application {
    background: transparent !important;
}
.v-application code {
    box-shadow: none !important;
}
</style>
