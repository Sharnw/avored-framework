<script>
import isNil from 'lodash/isNil';

export default {
  props: ['taxRate', 'baseUrl'],
  data () {
    return {
        taxRateForm: this.$form.createForm(this),
        rate_type: '',
        country_id: 0
    };
  },
  methods: {
      handleSubmit() {
          this.taxRateForm.validateFields((err, values) => {
            if (err) {
              e.preventDefault();
            }
          });
      },
      handleRateTypeChange(val) {
          this.rate_type = val;
      },
      handleCountrySelectChange(value) {
          this.country_id = value;
      },
      cancelTaxRate() {
          window.location = this.baseUrl + '/tax-group';
      }
  },
  mounted() {
      if (!isNil(this.taxRate)) {
          this.country_id = this.taxRate.country_id;
          this.rate_type = this.taxRate.rate_type;
      }
  }
};
</script>
