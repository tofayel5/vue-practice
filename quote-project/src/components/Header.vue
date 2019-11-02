 <template>
  <div class="row">
    <div class="col-sm-12">
      <h3>Quotes Added</h3>
      <div class="progress">
        <div
          class="progress-bar"
          role="progressbar"
          style="width: 25%;"
          aria-valuenow="25"
          aria-valuemin="0"
          aria-valuemax="100"
          :style="{width:(quoteCout/maxQuotes)*100 + '%'}"
        >{{ quoteCout}}/{{ maxQuotes}}</div>
      </div>
    </div>
  </div>
</template>
 <script>
export default {
  props: ["quoteCout", "maxQuotes"]
};
</script>
 <style>
</style>