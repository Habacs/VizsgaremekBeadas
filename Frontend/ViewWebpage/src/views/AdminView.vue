<template>
    <div class="container-fluid">
        <form>
            <div class="mb-3">
                <label name="add" class="add">Termék hozzáadása</label>
                <input type="text" class="form-control" id="productName" placeholder="Termék neve" required>
                <input type="file" class="form-control" id="productImage" accept="image/png" required>
                <input type="text" class="form-control" id="productPrice" placeholder="Termék ára" required>
                <input type="text" class="form-control" id="productDescription" placeholder="Termék leírása" required>
                <button type="submit" class="btn btn-primary mt-3" @click="addProduct()">Hozzáadás</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "admin",
    data() {
        return {
            productName: "",
            productPrice: "",
            productDescription: ""
        };
    },
    methods: {
        addProduct() {
            const product = {
                name: this.productName,
                price: this.productPrice,
                description: this.productDescription,
            };
            const logging = console.log("Product added:", product);
        }
    }
}
</script>

<style scoped>
.add {
    font-size: 200%;
    font-weight: bold;
    color: #218888 !important;
}
div {
    background-color: #bdf1f1 !important;
}
.form-control {
    background-color: #deffff !important;
    border: 1px solid #afaeae !important;
}
button {
    border: 1px solid #afaeae;
    margin-bottom: 20px;
}
</style>