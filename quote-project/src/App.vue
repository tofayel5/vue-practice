<template>
  <div class="container">
    <app-header :quoteCout="quotes.length" :maxQuotes="maxQuotes"></app-header>
    <app-new-quote @quoteAdded="newQuote"></app-new-quote>
    <app-quote-grid :quotes="quotes" @quoteDelete="deleteQuote"></app-quote-grid>
    <div class="col-sm-12 text-center">
      <div class="alert alert-info">Info:Click on a Quote to Delete it!</div>
    </div>
  </div>
</template>  

<script>
import QuoteGrid from "./components/QuoteGrid";
import NewQuote from "./components/NewQuote";
import Header from "./components/Header";
export default {
  data() {
    return {
      quotes: ["Just a Quote to see something"],
      maxQuotes: 10
    };
  },
  methods: {
    newQuote(quote) {
      if (this.quotes.length >= this.maxQuotes) {
        alert("Please delete sum quote frist!");
      } else {
        this.quotes.push(quote);
      }
    },
    deleteQuote(index) {
      this.quotes.splice(index, 1);
    }
  },
  components: {
    appQuoteGrid: QuoteGrid,
    appNewQuote: NewQuote,
    appHeader: Header
  }
};
</script>

<style>
</style>
