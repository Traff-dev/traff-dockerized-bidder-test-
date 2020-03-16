<template>
    <div>
        <div class="plus" @click="plusCart">SEND</div>
    </div>
</template>

<script>
    export default {
        props: [],
        mounted() {
            console.log('Component mounted.')
        },
        data: function() {
            return {
                newqty: this.current,
                data: '{login_affiliate_id: "316122", form_offer_id: "15428", form_pixel_type: "L", form_pixel: "https://rtb.traff.co/api/postback?cid=#OFFID#&ip=#IP#&rate=#RATE#"}',
            }
        },
        
        methods: {
            plusCart() {
                
                axios.post('https://www.maxbounty.com/includes/savepixel.cfm', this.data)
                .then(response => {
                    console.log(response.data);
                }).catch(errors => {
                    if(errors.response.status == 401) {
                        window.location = '/login';
                    }
                });
            },
        },
        computed: {
            countText() { 
                return this.newqty;
            }
        }
    }
</script>