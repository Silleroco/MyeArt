<template>
  <button 
    :class="`btn btn-${variant ? variant : 'primary'} ${active && 'activo'} text-capitalize btn-lg`"
  >
    {{ text }}
  </button>
</template>

<script>
  export default {
    props: ['text', 'variant', 'size', 'active']
  }
</script>

<style scoped> 

  .btn-lg {
    line-height: 50px;
    font-size: 16px;
    padding: 0 40px;
  }

  /* .btn-lg, .btn-group-lg > .btn {
    padding: 0.5rem 1rem;
    font-size: 1.125rem;
    line-height: 1.5;
    border-radius: 0.3rem;
  } */

  .btn-sm, .btn-group-sm > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.7875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
  }

  .btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
      -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    line-height: 1.6;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }
  @media (prefers-reduced-motion: reduce) {
    .btn {
      transition: none;
    }
  }
  .btn:hover {
    opacity: .8;
    color: #212529;
    text-decoration: none;
  }
  .btn:focus, .btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, 0.25);
  }
  .btn.disabled, .btn:disabled {
    opacity: 0.65;
  }

  /* Variants Primary */
  .btn-primary {
    color: #2566AE;
    background-color: transparent;
    border-color: #2566AE;
  }

  .btn-primary.activo {
    background-color: #2566AE;
    color:#fff;
  }

  .btn-primary:hover {
    color: #fff;
    background-color: #2566AE;
    border-color:#2566AE;
  }
  .btn-primary:focus, .btn-primary.focus {
    color: #fff;
    background-color: #2566AE;
    border-color: #2176bd;
    box-shadow: 0 0 0 0.2rem rgba(82, 161, 225, 0.5);
  }

  /* Variant Secondary */

  .btn-secondary {
    color: #ff9500;
    background-color: transparent;
    border-color: #ff9500;
  }

  .btn-secondary:hover {
    color: #fff;
    background-color: #ff9500;
  }

  .btn-secondary.activo {
    color: #fff;
    background-color: #ff9500
  }

  .btn-secondary:focus, .btn-secondary.focus {
    color: #fff;
    background-color: #ff9500;
    box-shadow: 0 0 0 0.2rem rgba(222, 207, 69, 0.5);
  }
</style>