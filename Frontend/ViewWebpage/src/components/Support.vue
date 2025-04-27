<template>
    <transition name="fade">
      <div class="modal-backdrop" @click.self="close" v-if="product">
        <div class="support-card">
          <button class="close-button" @click="close" aria-label="Bezárás">×</button>
  
          <h2>Támogatás</h2>
          <p class="text-muted mb-3">
            Támogatott cél: <strong>{{ product.name }}</strong>
          </p>
          <p>{{ product.description }}</p>
  
          <p class="text-secondary mb-3">
            {{ product.collectedAmount }} Ft / {{ product.goalAmount }} Ft
          </p>
  
          <p v-if="remainingAmount > 0" class="text-info mb-3">
            Hiányzó összeg: {{ remainingAmount }} Ft
          </p>
  
          <label for="amount">Támogatás összege (Ft):</label>
          <input
            id="amount"
            type="number"
            v-model="amount"
            class="form-control mb-3"
            min="500"
            :max="remainingAmount"
            placeholder="Pl. 1000"
          />
  
          <label for="message">Üzenet (opcionális):</label>
          <textarea
            id="message"
            v-model="message"
            class="form-control mb-3"
            placeholder="Miért támogatod ezt az ügyet?"
          ></textarea>
  
          <button class="btn btn-primary mb-2" @click="submit">Támogatom</button>
  
          <div v-if="success" class="alert alert-success mt-3">
            Sikeres támogatás! Köszönjük!
          </div>
        </div>
      </div>
    </transition>
  </template>
  
  <script>
  export default {
    name: 'Support',
    props: ['onClose', 'productId', 'product', 'onSupport'],
    data() {
      return {
        amount: '',
        message: '',
        success: false
      }
    },
    computed: {
      remainingAmount() {
        if (!this.product) return 0;
        const remaining = this.product.goalAmount - this.product.collectedAmount;
        return remaining > 0 ? remaining : 0;
      }
    },
    methods: {
      close() {
        this.onClose();
      },
      submit() {
        if (this.amount >= 500) {
          if (this.amount > this.remainingAmount) {
            alert(`Csak ${this.remainingAmount} Ft hiányzik a cél eléréséhez.`);
            return;
          }
          this.success = true;
          this.onSupport(this.productId, parseInt(this.amount));
          setTimeout(() => {
            this.success = false;
            this.close();
          }, 2000);
        } else {
          alert("A támogatásnak legalább 500 Ft-nak kell lennie.");
        }
      }
    }
  }
  </script>
  
  <style scoped>
  .modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 64, 64, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
  }
  
  .support-card {
    position: relative;
    background-color: #f9fbfb;
    border: 4px solid #007f7f;
    border-radius: 10px;
    padding: 2rem;
    width: 400px;
    max-width: 90%;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    text-align: center;
  }
  
  .support-card h2 {
    color: #005c5c;
    margin-bottom: 1rem;
  }
  
  .fade-enter-active, .fade-leave-active {
    transition: opacity 0.4s ease;
  }
  .fade-enter-from, .fade-leave-to {
    opacity: 0;
  }
  
  .close-button {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: none;
    border: none;
    font-size: 1.8rem;
    color: #005c5c;
    cursor: pointer;
    transition: color 0.3s ease;
  }
  
  .close-button:hover {
    color: #003f3f;
  }
  </style>
  