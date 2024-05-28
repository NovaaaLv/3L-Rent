<section>
<div class="cart">
    <div class="rounded-full size-12 border-2 border-gray-400 bg-slate-200 flex items-center justify-center cursor-pointer hover:bg-sky-600 animate-none ease-in duration-300 hover:border-transparent">
        <img src="{{ asset('storage/icons/icons-cart/market.png') }}" class="size-6"/>
    </div>
</div>
<style>
    .cart{
        top: 0.80rem;
        right:1.35rem;
        position:fixed;
        transition: ease-in;
        transition-duration: 0.75s;
    }
    .cart-scrolled{
        top:5.5rem;
        animation-duration: 2s;
        animation: spin 1s ease-in-out;
    }
    @keyframe spin{
        from{
            transform: rotate(0deg);
        }
        to{
            transform: rotate(360deg);
        }
    }
</style>
<script>
const cart = document.querySelector('.cart');
window.addEventListener('scroll',()=>{
    if(window.scrollY > 0){
        cart.classList.add('cart-scrolled');
    }else if(window.scrollY <=50){
        cart.classList.remove('cart-scrolled');
    }
});
</script>
<section>