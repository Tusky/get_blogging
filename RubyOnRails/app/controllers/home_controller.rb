class HomeController < ApplicationController
  # GET /
  def list_all
    @posts = Post.all

    respond_to do |format|
      format.html { render 'multi_post' }
      format.json { render json: @posts }
    end
  end

  def show
    @post = Post.find(params[:id])

    respond_to do |format|
      format.html { render 'home/single_post' }
      format.json { render json: @post }
    end
  end

  def show_author
    @posts = Post.where(:user_id => params[:id] )

    respond_to do |format|
      format.html { render 'home/multi_post' }
      format.json { render json: @post }
    end
  end

  def show_tags
    @posts = Post.joins(:categories).where('categories.id' => params[:id])

    respond_to do |format|
      format.html { render 'home/multi_post' }
      format.json { render json: @post }
    end
  end

end
