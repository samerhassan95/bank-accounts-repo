<template>
    <div>
        <heading class="mb-6">Create Account</heading>



<div>

<div>
<label>Balance</label>
<input type ="number" required v-model="balance"/>
</div>

<div>
<label>Currency</label>
<select v-model="selected_currency" filterable placeholder="Select Currency">
           <option v-for="currency in currencies" v-on:click="setCurrency(currency)">
         {{ currency.name }}
       </option>

</select>


</div>

<div class="submit">
    <button v-on:click="handleSubmit">create account</button>
</div>

</div>

    </div>
</template>

<script>
import axios from 'axios'

export default {
    data(){
    return{
    balance: '',
        currencies: [],
        selected_currency: null
  }
      },
      mounted(){
        axios.get("/api/currencies")
                .then(response => {
                    this.currencies = response.data;
                })
                .catch(err => {
                    console.log(err)
                })
    },
methods:{
    setCurrency(currency){
       this.selected_currency = currency.id;
    },

handleSubmit(e){
    axios.post('/api/create-acc',{'balance':this.balance,'currency_id':this.selected_currency,'user_id':1}).then(
        response =>{
            console.log({'balance':this.balance,'currency':this.selected_currency});
        }
        ).catch(error => {
            console.log('error');
        })

// }
},


}
}
</script>


<style>
/* Scoped Styles */
</style>
