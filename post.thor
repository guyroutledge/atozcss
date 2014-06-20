require "stringex"
class Post < Thor

  desc "new", "create a new post"
  method_option :editor, :default => "vim"
  method_option :date

  def new(*title)
    title = title.join(" ")
    date = options[:date] || Time.now.strftime('%Y-%m-%d')
    filename = "_posts/#{date}-#{title.to_url}.md"

    if File.exist?(filename)
      abort("#{filename} already exists!")
    end

    puts "Creating new post: #{filename}"
    open(filename, 'w') do |post|
      post.puts "---"
      post.puts "layout: post_page"
      post.puts "title: \"#{title.gsub(/&/,'&amp;')}\""
      post.puts "alias: /"
      post.puts "date: #{date}"
	  post.puts "wistiaId: "
	  post.puts "videoLength: ? minutes ? seconds"
	  post.puts "comments: true"
	  post.puts "excerpt: >"
	  post.puts "  "
	  post.puts "summary: |"
	  post.puts "  "
      post.puts "---"
    end

    system(options[:editor], filename)
  end

end
