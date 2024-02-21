<template>
    <div>
        <div>
            <multiselect v-model="values" :options="options" :multiple="true" @change="fetchData()" @input="fetchData()">
            </multiselect>
        </div>
        <div v-if="records">
            <div>
                <button class="btn btn-primary" style="margin: 20px;" @click="downloadPdf">Download PDF</button>
                <button class="btn btn-primary" style="margin: 20px;" @click="downloadDoc">Download DOC</button>
            </div>
            <ul>
                <li v-for="(record, index) in records" :key="index + 1">
                    <p>{{ record.name }}</p>
                    <div>
                        <p>{{ record.about }}</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
  
<script>
import Multiselect from 'vue-multiselect'
export default {
    components: { Multiselect },
    data() {
        return {
            values: null,
            options: [
                'Vue.js',
                'Vue-Multiselect',
                'Vuelidate',
            ],
            records: null
        }
    },
    methods: {
        fetchData() {
            axios
                .post('/api/get-data', { 'values': this.values })
                .then((response) => {
                    this.records = response.data.data
                })
        },
        downloadDoc() {
            axios.post('/api/download-doc', { 'values': this.values }, { responseType: 'blob' })
                .then(response => {
                    const blob = new Blob([response.data]);

                    // Create a temporary URL for the blob
                    const url = window.URL.createObjectURL(blob);

                    // Create a link element to trigger the download
                    const link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', 'word_document.docx');

                    // Append the link to the document body and trigger the download
                    document.body.appendChild(link);
                    link.click();

                    // Clean up
                    window.URL.revokeObjectURL(url);
                    document.body.removeChild(link);
                })
                .catch(error => {
                    // Handle error
                    console.error('Error generating DOC:', error);
                });
        },
        downloadPdf() {
            axios.post('/api/download-pdf', { 'values': this.values }, { responseType: 'blob' })
                .then(response => {
                    console.log(response.data);

                    const blob = new Blob([response.data], { type: 'application/pdf' });
                    // Create a URL for the blob object
                    const url = window.URL.createObjectURL(blob);
                    // Create a temporary link element
                    const link = document.createElement('a');
                    link.href = url;
                    link.download = 'document.pdf'; // Set the filename for download
                    // Simulate a click on the link to trigger the download
                    link.click();
                    // Clean up resources
                    window.URL.revokeObjectURL(url);
                })
                .catch(error => {
                    // Handle error
                    console.error('Error generating PDF:', error);
                });
        }
    },
}
</script>
  
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>