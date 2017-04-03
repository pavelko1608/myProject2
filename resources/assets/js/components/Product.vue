<template>
<div>
    
    
        
    <div class="cart">
    <div class="cart-btn-group">
          <div @click="showCart = !showCart" v-show="!verified" class="cartButton">
           <span class="cartText">{{ items.length + (items.length > 1 || items.length === 0 ? " items" : " item") }}</span>
          </div>
        

        <div class="showCart">
        <div v-show="showCart">
            <div v-show="items.length > 0">
              
                <div v-for="item in items" transition="fade" >

                  <p><strong>{{ item.quantity }}</strong> - {{ item.title }} : {{ item.price }} $ </p>
                </div>
              

              <div @click="verified = true, showCart = false" class="checkout-btn"><p>Check out</p></div>
            </div>

             <div v-show="items.length === 0">
              <p>Your cart is empty!</p>
            </div>
       </div>
        <div  v-show="verified" class="verified">
                      <p>Your Cart</p>
                      <p v-for="product in items"><strong>{{ product.quantity }}</strong>: {{ product.title }} - <span>{{ product.price * product.quantity }} $</span></p>
                      
                      
                        <div>
                          <p>Total: <span>{{ total }} $</span></p>
                          <div class="checkout-btn"><p @click="sendShit(total)" >Looks Good</p></div>
                        </div>
                        
        </div>
        </div>
                    </div>
    </div>
    

            <div class="content">
                    <div v-for="product in products">
                            <div  class="item">
                                <p class="item-text item-title">{{ product.title }}</p>
                                <p class="item-text item-price">Price: {{ product.price }} $</p>
                                <div @click="addToCart(product)" class="item-button"><span class="item-button-text">Add to cart</span></div>
                            </div>
                    </div>                  
            </div>
</div>            
</template>

<script>
    export default {
        data: function() {
            return {
                products: [],
                items: [],
                showCart: false,
                verified: false
            };
        },
        created: function() {
            $.getJSON('api/products', function(data) {
                this.products = data;
            }.bind(this));
        },
        computed: {
            total() {
            var total = 0;
            for(var i = 0; i < this.items.length; i++) {
            total += this.items[i].price;
            total = total * this.items[i].quantity;
      }

            return total;
    }
  },
        methods: {
            addToCart(product) {
                product.quantity += 1;
                if(product.quantity == 1) {
                this.items.push(product);
            }
            
            },
            sendShit(total) {
                axios({
                    method: 'post',
                    url: '/displayTotal',
                    data: {
                        total: total
                    }
                });
                console.log(total);

            }
        }

    }
</script>
