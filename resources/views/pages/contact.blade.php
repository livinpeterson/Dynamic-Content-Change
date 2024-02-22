@extends('layouts.app')
@section('main')

<div class="address">
    <div class="address-cards">
      <div class="card">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.11123726638!2d76.9573571!3d8.488564300000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05ab9b1186ff79%3A0x9214037cd5b4c19b!2sZybo%20Tech%20Lab%20-%20Digital%20Marketing%20%7C%20SEO%20%7C%20Web%20Development%20%7C%20Software%20Development!5e0!3m2!1sen!2sin!4v1708401957097!5m2!1sen!2sin" width="
          592" height="546" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>

      <div class="card">
        <div class="card-body">
          <div class="card-title">
            <h2>Contact us</h2>
            <form id="contactForm" action="" method="post">
              <div class="form-group">
                  <label for="firstname">First Name:</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" required>
              </div>
              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection
