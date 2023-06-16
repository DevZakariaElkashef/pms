 <div class="form-group">
                  <label for="category_id">Category</label>
                  <select id="category_id" class="form-control" name="category_id">
                  <?php while($category = mysqli_fetch_array($result)) : ?>
                      <option value="<?= $category['id'] ?>"> <?= $category['NAME'] ?> </option>
                    <?php endwhile; ?>
                  </select>
                </div>