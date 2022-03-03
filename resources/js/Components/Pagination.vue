<template>
    <nav class="pagination-default d-flex justify-content-center">
        <v-pagination
            v-model="page"
            :pages="pages"
            :range-size="1"
            active-color="#DCEDFF"
            @update:modelValue="updateHandler"
        />
    </nav>
</template>

<script>
import VPagination from "@hennge/vue3-pagination";

export default {
    props: ['size', 'porPage', 'page'],
    components: {
        VPagination
    },
    computed: {
        pages(){
            return Math.ceil(this.size / this.porPage);
        }
    },
    methods: {
        updateHandler(newPage){
            this.$emit('update', newPage );
        }
    }
}
</script>

<style scope>
.Pagination {
  display: flex;
  flex-flow: row;
  flex-wrap: wrap;
  align-items: center;
  margin: 0;
  padding: 0;
  list-style-type: none; }

.PaginationControl {
  display: flex;
  align-items: center; }

.Control {
  position: relative;
  display: block;
  width: 18px;
  height: 18px;
  margin: 0 2px;
  fill: #BBBBBB; }
  .Control-active {
    fill: #333333;
    cursor: pointer;
    transition: fill 0.2s ease-in-out; }
    .Control-active:hover {
      fill: #000000;
      transition: fill 0.2s ease-in-out; }

.Page {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  margin: 0 2px;
  color: #666666;
  background-color: transparent;
  font-size: 16px;
  border-radius: 3px;
  box-sizing: border-box;
  border-color: transparent;
  cursor: pointer;
  outline: 0;
  user-select: none; }
  .Page:hover {
    border: 1px solid #DEDEDE; }
  .Page-active {
    color: #333333;
    border: 1px solid #DEDEDE; }

.DotsHolder {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 22px;
  height: 22px;
  margin: 0 2px;
  box-sizing: border-box; }

.Dots {
  width: 8px;
  height: 4px;
  fill: #BBBBBB; }
</style>