@extends('master.layout')

    <!-- Section -->
    @section('title')
                form Vote
    @endsection

    @section('content') 
   
    <form method="POST" action='/formVote/{{ $voyage->id }}'>
                @csrf
                <div class="form-group">
                    <label for="rating">Note:</label>
                    <select name="rating" id="rating" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire:</label>
                    <textarea name="comment" id="comment" class="no-tinymce form-control " ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Noter</button>
            </form>
            
            
          
    @endsection
    
