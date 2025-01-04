<style>
/* Container Styling */
.info-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
  padding: 20px;
}

@media (min-width: 992px) {
  .info-container {
    flex-direction: row;
  }
}

/* Sidebar Styling */
.info-sidebar {
  flex: 1;
  padding: 20px;
  background-color: #f1f1f1;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.info-slider-text ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.info-slider-text li {
  cursor: pointer;
  padding: 15px;
  border-left: 3px solid transparent;
  transition: border-color 0.3s, background-color 0.3s;
  display: flex;
  align-items: center;
}

.info-slider-text li:hover {
  border-color: #007bff;
  background-color: #f0f8ff;
}

/* Image Styling for Sidebar */
.info-sidebar img {
  width: 100%;
  height: auto;
  border-radius: 8px;
  margin-bottom: 20px; /* Added margin below image */
  object-fit: cover; /* Ensure image covers the area nicely */
}

/* Main Content Styling */
.info-main-content {
  flex: 2;
  padding: 20px;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.content-section {
  display: none;
}

.content-section.active {
  display: block;
}

/* Link Styling */
.btn-link {
  text-decoration: none;
  color: #007bff;
  font-weight: 600;
}

.btn-link:hover {
  text-decoration: underline;
  color: #0056b3;
}

/* Typography Enhancements */
h1.bold {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 10px;
}

p {
  font-size: 16px;
  line-height: 1.6;
  color: #333;
}

@media (max-width: 767px) {
  .info-main-content {
    padding: 15px;
  }

  .info-sidebar {
    padding: 10px;
  }
}

/* Aligning the 'Read More' link to the right */
.read-more-link {
  float: right;
  color: #007bff;
  font-weight: 600;
}

.read-more-link:hover {
  text-decoration: underline;
  color: #0056b3;
}
</style>

<div class="container info-container">
  <!-- Sidebar Section -->
  <div class="info-sidebar info-slider-text me-lg-4">
    <ul class="list-unstyled">
      <li onmouseover="showContent('HEALTHCARE')" id="HEALTHCARE_sidebar" class="bold">
        <img src="assets/img/blank-doctor-2.png" alt="Healthcare Consulting Image" class="img-fluid mb-3" />
      </li>
    </ul>
  </div>

  <!-- Main Content Section -->
  <div class="info-main-content">
    <div id="HEALTHCARE" class="content-section active">
      <!-- Content for Healthcare -->
      <p>Vitality Healthcare stands at the forefront of healthcare consulting, combining the dynamism of a young and enthusiastic team with the wisdom of seasoned industry professionals. Our leadership team...</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quod magnam sunt? Beatae voluptate mollitia quaerat ad possimus omnis eum? Distinctio provident quae sit est vero a nostrum aut excepturi eos. Molestiae delectus earum officia quas facilis commodi atque fuga corrupti repellat perferendis ullam consequuntur voluptate ea inventore error suscipit nulla tenetur itaque fugiat repellendus distinctio aut veritatis, nam blanditiis! Nam repellendus id dolorem recusandae quo aspernatur officiis sed, quas beatae eum nihil facere alias dolorum distinctio nemo autem porro! Magnam quos tempore excepturi, numquam iste iure consequuntur unde et dolorem voluptate libero magni quasi, inventore tempora sunt perspiciatis. Optio!</p>
    </div>
  </div>
</div>

<script>
  function showContent(sectionId) {
    // Hide all content sections
    const sections = document.querySelectorAll('.content-section');
    sections.forEach((section) => section.classList.remove('active'));

    // Show the selected content section
    const selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
      selectedSection.classList.add('active');
    }
  }
</script>
